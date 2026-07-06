<!DOCTYPE html>
<html>
    <head>
        <title>Research Pipeline</title>
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/pipeline.css">
    </head>

    <body>
        <?php include "nav.php"; ?>

        <div id="content">
            <div class="section">
                <h1>Research Pipeline</h1>
                <p>
                    Explore the steps below to learn about how MoM works
                </p>
            </div>

            <div class="pipeline-page">
                <div class="pipeline-progress">
                    <button class="step-button active" onclick="showStep(0)">
                        1. Collect Data
                    </button>

                    <button class="step-button" onclick="showStep(1)">
                        2. Clean
                    </button>

                    <button class="step-button" onclick="showStep(2)">
                        3. Process
                    </button>

                    <button class="step-button" onclick="showStep(3)">
                        4. Analyze
                    </button>

                    <button class="step-button" onclick="showStep(4)">
                        5. Share
                    </button>
                </div>

                <div class="pipeline-detail active">
                    <div class="pipeline-text">
                        <h2>1. Collect Data</h2>

                        <p>
                            Creates a pipeline to collect posts and data from Bluesky and Mastadon. These posts are what will be classified and determined whether or not to be misinformation.
                        </p>

                        <p>
                            Bluesky and Mastodon are both open-source, free to use social networks that are similar to other social media platforms like Instagram and X (formerly Twitter). 
                        </p>
                    </div>

                    <div class="pipeline-image">
                        <img class="whatIcon" src="img/home_what1.png" alt="Icons representing the two data streams from Mastadon and Bluesky."/>
                    </div>
                </div>

                <div class="pipeline-detail">
                    <div class="pipeline-text">
                        <h2>Step 2: Data Cleaning</h2>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                        </p>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                        </p>
                    </div>

                    <div class="pipeline-image">
                        <img src="img/mom_segment1.png" alt="Data cleaning example">
                    </div>
                </div>

                <div class="pipeline-detail">
                    <div class="pipeline-text">
                        <h2>Step 3: Data Processing</h2>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                        </p>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                        </p>
                    </div>

                    <div class="pipeline-image">
                        <img src="images/data-processing.jpg" alt="Data processing example">
                    </div>
                </div>

                <div class="pipeline-detail">
                    <div class="pipeline-text">
                        <h2>Step 4: Analysis</h2>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                        </p>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                        </p>
                    </div>

                    <div class="pipeline-image">
                        <img src="images/data-analysis.jpg" alt="Data analysis example">
                    </div>
                </div>

                <div class="pipeline-detail">
                    <div class="pipeline-text">
                        <h2>Step 5: Results</h2>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                        </p>

                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966,
                        </p>
                    </div>

                    <div class="pipeline-image">
                        <img src="images/results.jpg" alt="Research results example">
                    </div>
                </div>

                <div class="pipeline-controls">
                    <button onclick="previousStep()">Back</button>
                    <button onclick="nextStep()">Next</button>
                </div>
            </div>
        </div>

        <script>
            var currentStep = 0;

            function showStep(stepNumber) {
                var details = document.getElementsByClassName("pipeline-detail");
                var buttons = document.getElementsByClassName("step-button");

                for (var i = 0; i < details.length; i++) {
                    details[i].classList.remove("active");
                    buttons[i].classList.remove("active");
                }

                details[stepNumber].classList.add("active");
                buttons[stepNumber].classList.add("active");

                currentStep = stepNumber;
            }

            function nextStep() {
                var details = document.getElementsByClassName("pipeline-detail");

                if (currentStep < details.length - 1) {
                    currentStep = currentStep + 1;
                    showStep(currentStep);
                }
            }

            function previousStep() {
                if (currentStep > 0) {
                    currentStep = currentStep - 1;
                    showStep(currentStep);
                }
            }
        </script>
    </body>

    <?php include "footer.php";?>

</html>