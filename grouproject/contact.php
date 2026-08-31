<html>
    <head>
        <title>Contact Us</title>

        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/contact.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Loads the hCaptcha script so the captcha box can appear -->
        <script src="https://js.hcaptcha.com/1/api.js" async defer></script>

        <!-- favicon -->
        <link rel="icon" type="image/favicon" href="img/favicon.ico">
    </head>

    <body>

        <?php include "nav.php";?>

        <div id="content">

            <div id="contact-left">

                <h1>Contact Us</h1>

                <p>Fill out this form to email us!</p>

                <img src="img/contactbackground.png" alt="Envelope illustration">

            </div>

            <div id="contact-right">

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <div id="short">

                        <div class="short-field">

                            <label for="name">
                                Name <span>*</span>
                            </label>

                            <input type="text" id="name" name="name" required>
                        </div>


                        <div class="short-field">

                            <label for="email">
                                Email <span>*</span>
                            </label>

                            <input type="text" id="email" name="email" required>
                        </div>
                    </div>

                    <label for="message">
                        Message <span>*</span>
                    </label>

                    <textarea id="message" name="message" required>
                    </textarea>

                    <div id="cap">

                        <!-- Connects to my hCaptcha account -->
                        <div
                            class="h-captcha" data-sitekey="0f804a9e-76e4-41f4-b038-7430ef6217de">
                        </div>

                        <button class="internal" type="submit" id="submit"> Send!
                        </button>

                    </div>
                </form>
            </div>
        </div>

        <?php

            function clean($data){
                $data = trim($data);
                $data = stripcslashes($data);
                return $data;
            }

            $name = '';
            $email = '';
            $message = '';


            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $name = clean($_POST["name"] ?? '');
                $email = clean($_POST["email"] ?? '');
                $message = clean($_POST["message"] ?? '');


                // After the captcha is completed by the user,
                // a value gets created
                $captchaResponse = $_POST["h-captcha-response"] ?? '';


                // key unique to the hCaptcha account
                $secretKey = "ES_d14c5aa2c7af4f2d85fda6e3ea9aa608";


                if($name !== '' && $email !== '' && $message !== ''){


                    // checks that the captcha was done
                    if($captchaResponse == ''){

                        echo "<script>
                                alert('please complete captcha!');
                                window.location.href = window.location.href;
                              </script>";

                        exit;
                    }

                    // URL used to verify captcha
                    $verifyURL = "https://hcaptcha.com/siteverify";

                    // data sent to hCaptcha
                    $data = [
                        "secret" => $secretKey,
                        "response" => $captchaResponse
                    ];

                    // settings for request sent to hCaptcha
                    $options = [
                        "http" => ["header" =>"Content-type: application/x-www-form-urlencoded\r\n",
                        "method" => "POST",
                        "content" => http_build_query($data)
                    ]
                    ];


                    // sends verification request
                    $context = stream_context_create($options);

                    $result = file_get_contents($verifyURL, false, $context);

                    $responseData = json_decode($result);

                    // if captcha response is valid
                    if($responseData && $responseData->success){
                        $subject ="New Contact Form Message from $name: \n\n";

                        $body =
                            "You have received a new message from the MoM website contact form. \n\n" .
                            "Name: $name\n" . "Email: $email\n" . "Message: \n$message";

                        // writes sample email

                        $baseName = "sample";

                        $extension = ".txt";

                        $filename = $baseName . $extension;

                        $counter = 1;

                        while(file_exists($filename)){

                            $filename = $baseName . "(" . $counter . ")" .
                            $extension;

                            $counter++;
                        }

                        $output =
                            fopen($filename, "w")
                            or die("File not found");

                        if(fwrite($output, $subject . $body)){

                            echo "<script>
                                    alert('Message saved successfully!');
                                    window.location.href = window.location.href;
                                  </script>";
                        }

                        else{

                            echo "<script>
                                    alert('Something went wrong');
                                    window.location.href = window.location.href;
                                  </script>";
                        }

                        fclose($output);
                        exit;
                    }

                    else{
                        echo "<script>
                                alert('captcha failed...');
                                window.location.href = window.location.href;
                              </script>";
                    }
                }
                else{

                    echo "<script>
                            alert('Required fields cannot be empty!');
                            window.location.href = 'contact.php';
                          </script>";

                    exit;
                }
            }
        ?>

        <?php include "footer.php";?>

    </body>
</html>