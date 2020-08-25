require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
$mail = new PHPMailer\PHPMailer\PHPMailer;

//Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "Write ur mail address";                 
$mail->Password = "";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   

$mail->From = "ur mail address";
$mail->FromName = "Ur Name";

$mail->addAddress("Recipient's address", "RecepientName");

$mail->isHTML(true);
$file_to_attach = 'filename.html';
$mail->AddAttachment( $file_to_attach , 'filename.html' );
$file_to_attach = 'filename.html';
$mail->AddAttachment( $file_to_attach , 'filename.html' );

$mail->Body="";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}?>
</body>
</html>
