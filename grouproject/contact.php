<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/contact.css">
         <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
         <!-- Loads the hCaptcha script so the captcha box can appear on the page next to the form -->
        <script src="https://js.hcaptcha.com/1/api.js" async defer></script>

        <!-- favicon link -->
        <link rel="icon" type="image/favicon" href="img/favicon.ico">
    </head>

    <body>
        <?php include "nav.php";?>
        <div id='content'>
            <div id='form'>
                <h1>Contact Us!</h1>
                <p>Fill out this form to email us!</p>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <div id="short">
                    <label for ="name">Name <span>*</span></label>
                    <input type = "text" id ="name" name="name" required/>
                    
                    <label for = "email">Email <span>*</span></label>
                    <input type = "text" id="email" name="email" required/>

                </div>

                    <label for = "message">Message <span>*</span></label>
                    <textarea type = "text" id="message" name="message" required> </textarea>

                <div id="cap">

                    <!-- Connects to my hCaptcha account -->
                    <div class="h-captcha" data-sitekey="0f804a9e-76e4-41f4-b038-7430ef6217de"></div>
                
                    <button class= 'internal' type = 'submit' id='submit'> submit </button>

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

        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $name = clean ($_POST["name"] ?? '');
            $email = clean($_POST["email"] ?? '');//get the post data from form
            $message = clean($_POST["message"] ?? '');

            // After the captcha is completed by the user, a value gets created
            // but if the user doesn't complete the captcha, this value is empty
            $captchaResponse = $_POST["h-captcha-response"] ?? '';
            // key unique to the hcaptcha account I made
                        $secretKey = "ES_d14c5aa2c7af4f2d85fda6e3ea9aa608";
            
            if($name !== '' && $email !== '' && $message !== ''){

                // checks that the catpcha was done
                if($captchaResponse == ''){
                    echo "<script>
                            alert('please complete captcha!');
                            window.location.href = window.location.href;
                            
                        </script>";
                    exit;
                }

                // the URL to verify the catpcha
                $verifyURL = "https://hcaptcha.com/siteverify";

                // this is the data that'll get sent to hCaptcha
                $data = [
                    "secret" => $secretKey,
                    "response" => $captchaResponse
                ];


                // the settings for the post request sent to hCaptcha
                $options = [
                    "http" => [
                        "header" => "Content-type: application/x-www-form-urlencoded\r\n",
                        "method" => "POST",
                        "content" => http_build_query($data)
                    ]
                ];

                // Sends the verification request to hCaptcha and decode the response
                $context = stream_context_create($options);
                $result = file_get_contents($verifyURL, false, $context);
                $responseData = json_decode($result);

                // key part: if the captcha response is valid, then the email is good to send
                if($responseData && $responseData->success){
                    
                    // $recipient = "noreply@scu.edu";//can be changed to other address
                    $subject = "New Contact Form Message from $name: \n\n";

                    $body = "You have recieved a new message from the MoM website contact
                    form. \n\n".
                    "Name: $name\n".
                    "Email: $email\n".
                    "Message: \n$message";

                        //write sample email

                    $baseName = "sample";
                    $extension = ".txt";

                    $filename = $baseName . $extension;
                    $counter = 1;

                    while (file_exists($filename)) {
                        $filename = $baseName . "(" . $counter . ")" . $extension;
                        $counter++;
                    }

                    $output = fopen($filename, "w")or die("File not found");

                    if (fwrite($output, $subject . $body)) {
                        echo "<script>
                            alert('Message saved successfully!');
                            window.location.href = window.location.href;
                        </script>";
                    } else {
                        echo "<script>alert('Something went wrong');
                        window.location.href = window.location.href;</script>";
                    }

                    // fwrite($output, $subject);
                    // fwrite($output,$body);
                    // $headers = "From: noreply@ssl.students.engr.scu.edu\r\n";
                    // $headers .= "Reply-To: $email\r\n";
                    // $headers .="X-Mailer : PHP/" . phpversion();



                    // if(mail($recipient, $subject, $body, $headers)){
                    //     echo "Your message has been sent!";
                    // } else {
                    //     echo "Oh no...Something went wrong.";
                    // }

                    fclose($output);
                    exit;

            }else{
                echo "<script>
                    alert('captcha failed...');
                    window.location.href = window.location.href;
                            
                </script>";
            }

            }else{
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
