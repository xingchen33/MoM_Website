<?php

	if (file_exists('articles.json')){
		$json = file_get_contents('articles.json');
		$decoded = json_decode($json)->articles; 
	} else {
		echo "Error: can't find articles.json";
	}

	if (file_exists('game.html')) {
		$dom = new DOMDocument();
		@$dom->loadHTMLFile('game.html');

		// Randomly select one article
		$article = $decoded[rand(0, count($decoded) - 1)];

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

		$script = $dom->createElement('script');
	    $script->nodeValue = 'const isReal = ' . ($article->isReal ? 'true' : 'false') . ';';
	    $dom->getElementsByTagName('body')[0]->appendChild($script);

	} else {
		echo "Error: articles.html does not exist";
	}

	header('Content-Type: text/html');
	echo $dom->saveHTML();

?>