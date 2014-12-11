<?php

if(isset($_POST['email'])) {
     
        // check reCAPTCHA information
        require_once('recaptcha-php-1.11/recaptchalib.php');
         
        $privatekey = "6Ldz5voSAAAAABJqU6sjDvQZ4WDD2HVkSmU8-HKk";
        $resp = recaptcha_check_answer ($privatekey,
                                    $_SERVER["REMOTE_ADDR"],
                                    $_POST["recaptcha_challenge_field"],
                                    $_POST["recaptcha_response_field"]);
    //If captcha code is entered properly
    if($resp->is_valid){
        $to = "eugene.baibourin@gmail.com";
        $subject = "Lohee Rebozo Comment Submission";
        
        //data the visitor provided
        $firstname_field = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
        $lastname_field = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
        $email_field = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $telephone_field = filter_var($_POST['telephone'], FILTER_SANITIZE_STRING);
        $comments_field = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);
        
        //construct the message
        $body = "From: $firstname_field $lastname_field\n\n email: $email_field\n\n Phone:$telephone_field \n\n Comments: $comments_field";
        
	//create the headers
	$headers = 'From: '.$email_field." \r\n".
	'Reply-To: '.$email_field."\r\n" .
	'X-Mailer: PHP/' .phpversion();
	

        //mail this garbage
        mail($to, $subject, $body, $headers);
        
        //redirect to correct page
        header('Location: formsuccess.html');
    }else{
        //try again -- there is no error checking yet; this assumed the captcha was wrong
        header('Location: tryagain.php');
    }

}
else{
    //need to implement some kind of error checking here
    header('Location: tryagain.php');
}

?>
