<html>
    <head>
        <title>MoM Home</title>
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- favicon link -->
        <link rel="icon" type="image/favicon" href="img/favicon.ico">
    </head>
    
    <body>
        <?php include "nav.php";?>

        
            <div id="cover">
                <div class="left">
                    <h1>Welcome to the Mitigation of Misinformation Project!</h1>
                    <p>Asking the question... what would MoM do?
                    </p>
                </div>
                <aside class="right">
                    <img src="img/home_cover.png" alt="Illustration of a person next to an abnormally large cell phone."/>
                </aside>
            
            </div>

        <main>

            <div class='section' id="why">

                <h2>Why MoM Matters?</h2>

                <div class="content">

                    <div class="left">
                        <img src="img/home_why.png" alt="Illustration of a woman walking a dog looking down at their cell phone."/>
                        <a class="external" href="external/poster.pdf", target="_blank">View the Research Poster</a>
                    </div>
                    <aside class="right">
                        <ul>
                            <li><img class="why_svg" src="img/why_1.png" alt="An illustration of a triangular hazard sign with an exclamation mark in the center.">The spread of misinformation is running rampant on social media</li>
                            <li><img class="why_svg" src="img/why_2.png" alt="Illustration a brain with a qustion mark in the center.">It's becoming increasingly difficult to discern what is fake and not</li>
                            <li><img class="why_svg" src="img/why_3.png" alt="Illustration of a magnifying glass with a checkmark in the middle.">There has to be a better way to figure out what is misinformation and what is not!</li>
                            <!-- <li id="poster"> <- Click the link to learn more from the research poster!</li> -->

                        </ul>

                    </aside>

                </div>
            </div>

            <div  class='section split3' id="what">
                <h2>How MoM Works</h1>
                <ul class="containerOuter">
                    <li class="container">
                        <img class="whatIcon" src="img/home_what1.png" alt="Icons representing the two data streams from Mastadon and Bluesky."/>
                        <p>Creates a pipeline to collect posts and data from Bluesky and Mastadon</p>
                    </li>
                    <li class="container">
                        <img class="whatIcon" src="img/home_what2.png" alt="Icons representing the classifers in the MoM project that detect sentiment, credibility, and fact/opinion."/>
                        <p>Discerns between the truth and misinformation using cleverly-named classifier and text sentiment models</p>
                    </li>
                    <li class="container">
                        <img class="whatIcon2" src="img/home_what3.png" img="An illustration of a person scratching their head in thought."/>
                        <p>Re-introduces ranked social posts into social media feed based on truth rating</p>
                    </li>
                </ul>

                <a id="pipeline" class="external" href="external/pipeline.png", target = "_blank">View our Pipeline to learn more!</a>

            </div>

            <div class='section' id="you">
                <h2>What You Can Do</h2>
                <div class = content>

                    <div class="left">
                        <!-- <a class="external" href="#">Check out the project's main site</a> -->
                        <div class="line">
                            <p>Read our publication!</p>
                            <a class="internal" href="https://link.springer.com/chapter/10.1007/978-3-031-33614-0_13", target="_blank">Learn more</a>
                        </div>
                        <div class="line">
                            <p>Meet the team!</p>
                            <a class="internal" href="team.php">Learn more</a>
                        </div>
                    </div>
                
                    <aside id="game" class="right">
                        
                        <aside class="left">
                            <img src="img/home_game.png" alt="Image of a person with a virtual reality headset, arms extended, and icons in orbs floating around him; feline at his feet."/>
                        </aside>
                        
                        <div class="right">
                            <p id="gameTitle">Misinformation Article Minigame
                            <p>Play this minigame to test your classification skills!</p>
                            <a class="internal" href="game.php">Play Mini-game</a>
                        </div>

                    </div>

                </div>


            </div>
        </main>

        <?php include "footer.php";?>

    </body>
</html>
