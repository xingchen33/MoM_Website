<html>
    <head>
        <title>Contact Us!</title>
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/contact.css">

        <!-- hCaptcha connect -->
        <script src="https://js.hcaptcha.com/1/api.js" async defer></script>

    </head>

    <body>
        <?php include "nav.php";?>
        <div class='section'>
            <h1>Contact Us!</h1>
            <p>If you would like to contact us, please fill out this form and we'll get in touch:</p>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for ="name">Name:</label>
                <input type = "text" id ="name" name="name"/>
                
                <label for = "email">Email:</label>
                <input type = "text" id="email" name="email"/>

                <label for = "message">Message:</label>
                <textarea type = "text" id="message" name="message"> </textarea>
            
                <div class="h-captcha" data-sitekey="0f804a9e-76e4-41f4-b038-7430ef6217de"></div>

                <button type = 'submit' id='submit'> submit </button>
            </form>
        </div>

    <?php

        function clean($data){
            $data = trim($data);
            $data = stripslashes($data);
            return $data;

        }

        $name = '';
        $email = '';
        $message = '';

        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $name = clean ($_POST["name"] ?? '');
            $email = clean($_POST["email"] ?? '');//get the post data from form
            $message = clean($_POST["message"] ?? '');

            $captchaResponse = $_POST["h-captcha-response"] ?? '';
            // key unique to the hcaptcha account I made
                        $secretKey = "ES_d14c5aa2c7af4f2d85fda6e3ea9aa608";
            
            if($name !== '' && $email !== '' && $message !== ''){

                // checks that the catpcha was done
                if($captchaResponse == ''){
                    echo "Please complete the captcha!";
                    exit;
                }

                // the URL to verify the catpcha
                $verifyURL = "https://hcaptcha.com/siteverify";

                $data = [
                    "secret" => $secretKey,
                    "response" => $captchaResponse
                ];

                $options = [
                    "http" => [
                        "header" => "Content-type: application/x-www-form-urlencoded\r\n",
                        "method" => "POST",
                        "content" => http_build_query($data)
                    ]
                ];

                $context = stream_context_create($options);
                $result = file_get_contents($verifyURL, false, $context);
                $responseData = json_decode($result);
                if($responseData && $responseData->success){

                $recipient = "cramirezborrego@scu.edu"; // can be changed to other address
                $subject = "New Contact Form Message from $name";

                $body = "You have received a new message from the MoM website contact form!\n\n" .
                "Name: $name\n" .
                "Email: $email\n" .
                "Message:\n$message";

                $headers = "From: noreply@mitigationofmisinformation.com\r\n";
                $headers .= "Reply-To: $email\r\n";
                $headers .= "X-Mailer: PHP/" . phpversion();

                if(mail($recipient, $subject, $body, $headers)){
                    echo "Your message has been sent!";
                } else {
                    echo "Oh no... Something went wrong.";
                }

                } else {
                    echo "Captcha verification failed. Please try again.";
                    exit;
                }


            }else{
                echo"Name/email/message connot be left empty!";
                exit;
            }


        }


    ?>

    </body>
</html>