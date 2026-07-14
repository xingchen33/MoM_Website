<!DOCTYPE html>
<html>
    <head>
        <title>Research Pipeline</title>
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/pipeline.css">
        <!-- favicon link -->
        <link rel="icon" type="image/favicon" href="img/favicon.ico">
    </head>

    <body>
        <?php include "nav.php"; ?>

        <div id="content">
            <div class="section">
                <h1>Research Pipeline</h1>
                <p>
                    Scroll through the page to explore how MoM moves through each part
                    of the research process.
                </p>
            </div>

            <div class="pipeline-page">

                <div class="pipeline-step">
                    <div class="step-number">1</div>

                    <div class="step-content">
                        <div class="step-text">
                            <h2>Collect Data</h2>
                            <p>
                                Creates a pipeline to collect posts and data from Bluesky and Mastadon. These posts are what will be classified and determined whether or not to be misinformation.
                            </p>

                            <p>
                                Bluesky and Mastodon are both open-source, free to use social networks that are similar to other social media platforms like Instagram and X (formerly Twitter).
                            </p>
                        </div>

                        <div class="step-image-one">
                            <img src="img/home_what1.png" alt="Data collection example">
                        </div>
                    </div>
                </div>

                <div class="pipeline-step">
                    <div class="step-number">2</div>

                    <div class="step-content">
                        <div class="step-text">
                            <h2>Data Cleaning</h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                            </p>

                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                            </p>
                        </div>

                        <div class="step-image">
                            <img src="img/mom_segment1.png" alt="Data cleaning example">
                        </div>
                    </div>
                </div>

                <div class="pipeline-step">
                    <div class="step-number">3</div>

                    <div class="step-content">
                        <div class="step-text">
                            <h2>Data Processing</h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                            </p>

                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                            </p>
                        </div>

                        <div class="step-image">
                            <img src="img/mom_segment2.png" alt="Data processing example">
                        </div>
                    </div>
                </div>

                <div class="pipeline-step">
                    <div class="step-number">4</div>

                    <div class="step-content">
                        <div class="step-text">
                            <h2>Analysis</h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                            </p>

                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                            </p>
                        </div>

                        <div class="step-image">
                            <img src="img/mom_segment3.png" alt="Data analysis example">
                            <img src="img/mom_segment4.png" alt="Data analysis example">
                        </div>
                    </div>
                </div>

                <div class="pipeline-step">
                    <div class="step-number">5</div>

                    <div class="step-content">
                        <div class="step-text">
                            <h2>Results</h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                            </p>

                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                            </p>
                        </div>

                        <div class="step-image">
                            <img src="img/mom_segment5.png" alt="Research results example">
                        </div>
                    </div>
                </div>

                <div class="pipeline-step">
                    <div class="step-number">6</div>

                    <div class="step-content">
                        <div class="step-text">
                            <h2>Results 2</h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                            </p>

                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                            </p>
                        </div>

                        <div class="step-image">
                            <img src="img/mom_segment6.png" alt="Research results example">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>
            function revealSteps() {
                var steps = document.getElementsByClassName("pipeline-step");

                for (var i = 0; i < steps.length; i++) {
                    var windowHeight = window.innerHeight;
                    var stepTop = steps[i].getBoundingClientRect().top;

                    if (stepTop < windowHeight - 100) {
                        steps[i].classList.add("show");
                    }
                }
            }

            window.addEventListener("scroll", revealSteps);
            window.addEventListener("load", revealSteps);
        </script>
    </body>
</html>