<!DOCTYPE html>
<html>
	<head>
		<!-- favicon link -->
		<link rel="icon" type="image/favicon" href="img/favicon.ico">
	</head>
</html>

<?php
	include "nav.php";

	session_start();

	$pdo = new PDO('sqlite:scores.db');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // If no session exists or 10 mins have passed, reset the score
    if (!isset($_SESSION['start_time']) || !isset($_SESSION['seen'])) {
        $_SESSION['start_time'] = time();
        $_SESSION['score'] = 0;
        $_SESSION['seen'] = [];
    }

    // Check if 10 minutes (600 seconds) have passed
    if (time() - $_SESSION['start_time'] > 600) {
        // Reset everything after 10 mins
        $_SESSION['start_time'] = time();
        $_SESSION['score'] = 0;
        $_SESSION['seen'] = [];
    }

    if(isset($_POST['answer']) && $_POST['answer'] !== '') {
    	if ($_POST['answer'] === 'correct') {
    		$_SESSION['score']++;
    	}
    	header('Location: game.php');
    	exit();
    }

    $gameOver = count($_SESSION['seen']) >= 20;
    $finalScore = $_SESSION['score'];
    if ($gameOver) {
	    $elapsed = time() - $_SESSION['start_time'];
	    $mins = floor($elapsed / 60);
	    $secs = $elapsed % 60;
	    $time = $mins . 'm ' . $secs . 's';

	    $query = "INSERT INTO scores (score, time) VALUES (:score, :time)";
	    $bind = $pdo->prepare($query);
	    $bind->bindParam(':score', $finalScore);
	    $bind->bindParam(':time', $time);
	    $bind->execute();

    	$_SESSION['score'] = 0;
	    $_SESSION['seen'] = [];
	    $_SESSION['start_time'] = time();
    }

    if (!$gameOver) {
	    if (file_exists('articles.json')){
	        $json = file_get_contents('articles.json');
	        $decoded = json_decode($json)->articles; 
	    } else {
	        echo "Error: can't find articles.json";
	        exit();
	    }
	}

	if (file_exists('game.html')) {
		$dom = new DOMDocument();
		@$dom->loadHTMLFile('game.html');

		if(!$gameOver) {
			// get articles that haven't been seen yet
			$unseen = array_filter($decoded, function($a) {
				return !in_array($a->id, $_SESSION['seen']);
			});

			$unseen = array_values($unseen);

			$article = $unseen[rand(0, count($unseen) - 1)];
			$_SESSION['seen'][] = $article->id;
		

			$dom->getElementById('articleTitle')->nodeValue = $article->title;

			$dom->getElementById('articleDate')->nodeValue = $article->date;

			$contentDiv = $dom->getElementById('articleContent');
			if ($contentDiv) {
			    while ($contentDiv->firstChild) {
			        $contentDiv->removeChild($contentDiv->firstChild);
			    }
			    $p = $dom->createElement('p');
			    $p->nodeValue = $article->content;
			    $contentDiv->appendChild($p);
			} else {
			    echo "Error: articleContent not found";
			}
		}

		$timeLeft = 600 - (time() - $_SESSION['start_time']);
        $script = $dom->createElement('script');

        if($gameOver) {
        	$highScore = $pdo->query("SELECT score, time FROM scores ORDER BY score DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC);


        	$script->nodeValue = '
	        	document.getElementById("scoreDiv").style.display = "none";
			    document.getElementById("buttonDiv").style.display = "none";
			    document.getElementById("article").innerHTML = ""
			        + "<h2 style=\'text-align:center; color:#A32035;\'>Game Over!</h2>"
			        + "<p style=\'text-align:center; font-size:24px;\'>You scored <strong>' . $finalScore . '</strong> out of 20 in <strong>' . $time . '</strong></p>"
			        + "<div style=\'text-align:center; margin-top:20px;\'>"
			        + "<a href=\'game.php\' style=\'padding:15px 40px; background-color:#A32035; color:white; border-radius:10px; text-decoration:none; font-size:20px;\'>Play Again</a>" 
			        + "<p style=\'text-align:center; font-size:18px; color:gray;\'>High Score: <strong>' . $highScore['score'] . ' / 20</strong> in <strong>' . $highScore['time'] . '</strong> </p>"
			        + "</div>";
        	';
        } else {
	        $script->nodeValue = '
	            const isReal = ' . ($article->isReal ? 'true' : 'false') . ';
	            let score = ' . $_SESSION['score'] . ';
	            let timeLeft = ' . $timeLeft . ';

	            document.getElementById("scoreText").innerText = "Score: " + score + " / 20 | Question: ' . count($_SESSION['seen']) . ' / 20";

	            let countdown = setInterval(function() {
	                timeLeft--;
	                let mins = Math.floor(timeLeft / 60);
	                let secs = timeLeft % 60;
	                document.getElementById("timerText").innerText = "Time Left: " + mins + ":" + (secs < 10 ? "0" : "") + secs;
	                if (timeLeft <= 0) {
	                    clearInterval(countdown);
	                    document.getElementById("timerText").innerText = "Times up!";
	                    document.getElementById("realButton").disabled = true;
	                    document.getElementById("fakeButton").disabled = true;
	                }
	            }, 1000);

	            document.getElementById("realButton").addEventListener("click", function() {
	                checkAnswer(true);
	            });
	            document.getElementById("fakeButton").addEventListener("click", function() {
	                checkAnswer(false);
	            });

	            document.getElementById("nextButton").addEventListener("click", function() {
				    var ans = document.getElementById("answerInput").value;
				    if (ans === "") return;
				    const form = document.createElement("form");
				    form.method = "POST";
				    form.action = "game.php";
				    const input = document.createElement("input");
				    input.type = "hidden";
				    input.name = "answer";
				    input.value = ans;
				    form.appendChild(input);
				    document.body.appendChild(form);
				    form.submit();
				});

	            function checkAnswer(userGuess) {
	                const article = document.getElementById("article");
	                const resultText = document.getElementById("resultText");
	                document.getElementById("realButton").disabled = true;
	                document.getElementById("fakeButton").disabled = true;
	                let answeredCorrect = userGuess === isReal;
	                if (answeredCorrect) {
	                    article.classList.add("correct");
	                    resultText.classList.add("correct");
	                    resultText.innerText = "Correct! The article was " + (isReal ? "real." : "fake.");
	                } else {
	                    article.classList.add("wrong");
	                    resultText.classList.add("wrong");
	                    resultText.innerText = "Wrong! The article was actually " + (isReal ? "real." : "fake.");
	                }
	                document.getElementById("answerInput").value = answeredCorrect ? "correct" : "wrong";
	                setTimeout(function() {
	                    resultText.style.display = "block";
	                    document.getElementById("nextButton").style.display = "block";
	                }, 600);
	                
	            }
	        ';
    	}
    $dom->getElementsByTagName('body')[0]->appendChild($script);

	} else {
		echo "Error: articles.html does not exist";
	}

	header('Content-Type: text/html');
	echo $dom->saveHTML();

	include "footer.php";
?>
