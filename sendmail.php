<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PhpMailer/vendor/phpmailer/phpmailer/src/Exception.php';
require 'PhpMailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'PhpMailer/vendor/phpmailer/phpmailer/src/SMTP.php';

require 'PhpMailer/vendor/autoload.php';

$name = 'subhag nakade';
$email = 'subhag.nakade@gmail.com';

if(isset($name) && !empty($email)  )  { 
        
        $from = $_POST['email'];
      
        $to = 'subhag.nakade@gmail.com';
        $toname = 'subhag nakade';
      
        $subject = "Test Sign Up";

        $message = "Hello Testing";

        $mail = new PHPMailer(true);
                                      
        $mail->isSMTP();                                            
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = false;                              
        $mail->Username = 'youemailid@gmail.com';                 
        $mail->Password = '123456XXXXXX';                             
        $mail->SMTPSecure = 'tls';                            
        $mail->Port = 587;     

        
        $mail->addAddress($to,$toname);
        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->send();
        echo "Done";
}
else{
echo "empty"; die;
}

?>