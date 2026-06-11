<html>
    <head>
            <title>Home</title>
            <link rel="stylesheet" href="css/base.css">
            <link rel="stylesheet" href="css/home.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <?php include "nav.php";?>

        
            <div id="cover">
                <div class="left">
                    <h1>Welcome to the Project</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur nulla nec auctor dapibus. Cras leo nisi, blandit ac dui eu, malesuada 
                        dictum justo. 
                        Nulla fringilla mattis est, quis venenatis turpis imperdiet sit amet. Donec non egestas leo. Praesent ornare porta risus a convallis. Suspendisse 
                        tristique.
                    </p>
                </div>
                <aside class="right">
                    <img src="img/home_cover.png"/>
                </aside>
            
            </div>

        <main>

            <div class='section' id="why">

                <h2>Why MoM Matters?</h2>

                <div class="content">

                    <div class="left">
                        <img src="img/home_why.png"/>
                        <a class="external" href="external/poster.pdf">Read Research Poster</a>
                    </div>
                    <aside class="right">
                        <ul>
                            <li><img class="why_svg" src="img/home_svg.png">Sed efficitur nulla nec auctor dapibus.</li>
                            <li><img class="why_svg" src="img/home_svg.png">Sed efficitur nulla nec auctor dapibus.</li>
                            <li><img class="why_svg" src="img/home_svg.png">Sed efficitur nulla nec auctor dapibus.</li>
                            <li id="poster"> <- Click the link to learn more from the research poster!</li>

                        </ul>

                    </aside>

                </div>
            </div>

            <div  class='section split3' id="what">
                <h2>What MoM Does</h1>
                <ul class="containerOuter">
                    <li class="container">
                        <img class="whatIcon" src="img/home_what1.png"/>
                        <p>Nulla fringilla mattis est, quis venenatis turpis imperdiet sit amet.</p>
                    </li>
                    <li class="container">
                        <img class="whatIcon" src="img/home_what1.png"/>
                        <p>Nulla fringilla mattis est, quis venenatis turpis imperdiet sit amet.</p>
                    </li>
                    <li class="container">
                        <img class="whatIcon" src="img/home_what1.png"/>
                        <p>Nulla fringilla mattis est, quis venenatis turpis imperdiet sit amet.</p>
                    </li>
                </ul>

                <a id="pipeline" class="external" href="external/pipeline.png">See Pipeline to Learn More!</a>

            </div>

            <div class='section' id="you">
                <h2>What You Can Do</h2>
                <div class = content>

                    <div class="left">
                        <a class="external" href="#">Check out the project's main site</a>
                        <div class="line">
                            <p>Learn who made this website</p>
                            <a class="internal" href="team.php">learn more</a>
                        </div>
                        <div class="line">
                            <p>Contact us via email</p>
                            <a class="internal" href="contanct.php">learn more</a>
                        </div>
                    </div>
                
                    <aside id="game" class="right">
                        
                        <aside class="left">
                            <img src="img/home_game.png"/>
                        </aside>
                        
                        <div class="right">
                            <p id="gameTitle">Fake/Real Article Minigame
                            <p>Play this minigame to test your awareness!</p>
                            <a class="internal" href="game.php">Play Mini Game</a>
                        </div>

                    </div>

                </div>


            </div>
        </main>

        <?php include "footer.php";?>

    </body>
</html>
