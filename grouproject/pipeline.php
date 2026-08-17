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

        <!-- <div class="pipeline-banner">
            <img src="img/pipeline_banner.png" alt="Research pipeline banner.">
        </div> -->

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
                                <strong>Creates a pipeline</strong> to collect posts and data from Bluesky and Mastadon. These posts are what will be classified and determined whether or not to be misinformation.
                            </p>

                            <p>
                               <strong>Bluesky and Mastodon are both open-source, free to use social networks</strong> that are similar to other social media platforms like Instagram and X (formerly Twitter).
                            </p>
                        </div>

                        <div class="step-image-one">
                            <img src="img/pipeline_1.png" alt="Data collection example">
                        </div>
                    </div>
                </div>

                <div class="pipeline-step">
                    <div class="step-number">2</div>

                    <div class="step-content">
                        <div class="step-text">
                            <h2>Data Cleaning</h2>
                            <p>
                                <strong>The post data </strong> from the social platform posts are gathered, <strong>segmented into smaller chunks of text,</strong> and unnecessary information is removed. This prepares the data for analysis in the next step.
                            </p>
                        </div>

                        <div class="step-image">
                            <img src="img/pipeline_2.png" alt="Data cleaning example">
                        </div>
                    </div>
                </div>

                <div class="pipeline-step">
                    <div class="step-number">3</div>

                    <div class="step-content">
                        <div class="step-text">
                            <h2>Data Processing</h2>
                            <p>
                                The <strong>cleansed data is then analyzed</strong> by the RoBERTa model to determine whether the post at hand is either stating an opinion or is trying to make a factual claim. 
                            </p>

                            <p>
                                Depending on what the post is determined to be, the piece of information is then <strong>classified as a factual post</strong> or <strong>an opinion-based post.</strong>
                            </p>
                        </div>

                        <div class="step-image">
                            <img src="img/pipeline_3.png" alt="Data processing example">
                        </div>
                    </div>
                </div>

                <div class="pipeline-step">
                    <div class="step-number">4</div>

                    <div class="step-content">
                        <div class="step-text">
                            <h2>Analysis</h2>
                            <p>
                                <strong>Based on six datasets</strong> of already classified post data in multiple languages on topics ranging from celebrity gossip and political news to COVID-19 news and more, the BERT model <strong>determines whether a post is true or false.</strong> <strong>True in this context is understood to be highly likely to be true, and false is very unlikely to be true</strong>.
                            </p>

                            <p>
                                The <strong>post data at hand is also anaylized</strong> for sentiment to determine <strong>whether the tone of the post is positive or negative;</strong> this plays a role in whether or not the post is misinformation.
                            </p>
                        </div>

                        <div class="step-image">
                            <img src="img/pipeline_4.png" alt="Data analysis example">
                            <img src="img/pipeline_5.png" alt="Data analysis example">
                        </div>
                    </div>
                </div>

                <div class="pipeline-step">
                    <div class="step-number">5</div>

                    <div class="step-content">
                        <div class="step-text">
                            <h2>Results</h2>
                            <p>
                                Once a post has been analyzed, <strong>a percentage validity score</strong> is assigned based on the chance that it is a piece of truthful information.
                            </p>

                            <p>
                                <strong>This post is then reintroduced into a social media user's feed.</strong>
                            </p>

                            <p>
                                The reintroduction of classified posts is done in ranked manner where the posts with the <strong>highest validity/truthfulness scores</strong> are placed at <strong>the top of the feed,</strong> and less truthful posts are inserted further down in the feed.
                            </p>
                        </div>

                        <div class="step-image">
                            <img src="img/pipeline_6.png" alt="Research results example">
                        </div>
                    </div>
                </div>


<!-- future step 6 if ellaboration needed -->

<!--                 <div class="pipeline-step">
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
                </div> -->

            </div>
        </div>

        <!-- animation script for the scrolling pipeline info -->

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

        <?php include "footer.php";?>

    </body>
</html>