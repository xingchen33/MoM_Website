<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/contact.css">
    </head>

    <body>
        <?php include "nav.php";?>
        <div class='section'>
            <h1>Contact Us!</h1>
            <p>If you would like to contact us, please fill out this email form.</p>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for ="name">Name:</label>
                <input type = "text" id ="name" name="name"/>
                
                <label for = "email">Email:</label>
                <input type = "text" id="email" name="email"/>

                <label for = "message">Message:</label>
                <textarea type = "text" id="message" name="message"> </textarea>
            
                <button type = 'submit' id='submit'> submit </button>
            </form>
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

            
            if($name !== '' && $email == '' && $message == ''){
                echo "<p>$name:$email<p>";
                    
                $recipient = "sample@scu.edu";//can be changed to other address
                $subject = "New Contact Form Message from $name";

                $body = "You have recieved a new message from the MoM website contact
                form. \n\n".
                "Name: $name\n".
                "Email: $email\n".
                "Message: \n$message";

                $headers = "From: noreply@ssl.students.engr.scu.edu\r\n";
                $headers .= "Reply-To: $email\r\n";
                $headers .="X-Mailer : PHP/" . phpversion();

                if(mail($recipient, $subject, $body, $headers)){
                    echo "Your message has been sent!";
                } else {
                    echo "Oh no...Something went wrong.";
                }

            }else{
                echo"Name/email/message connot be left empty!";
                exit;
            }


        }


    ?>

        </body>
</html>