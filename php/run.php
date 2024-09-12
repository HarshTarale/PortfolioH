<?php
include("cong.php");


if(isset($_POST['name'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];

}else{
      echo "<center><p style='font-size: 40px; color:red;'>Error</p></center>";

};


try{
    $conn->query("INSERT INTO infor(name,email,msg) VALUE('$name','$email','$msg');");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
    echo "<center><p style='font-size: 40px; color:green;'>DONE</p></center>";

 }catch(PDOException $e){
       echo "error" .$e->getMessage();
 };



//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require "phpmail\Exception.php";
require "phpmail\PHPMailer.php";
require "phpmail\SMTP.php";


 

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'taraleharsh0@gmail.com';                     //SMTP username
    $mail->Password   = 'mxhz lrrp ijet zldl';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('taraleharsh0@gmail.com', 'PartfolioHarsh');
    $mail->addAddress('harshstarale@gmail.com', 'harsh');     //Add a recipient
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $name;
    $mail->Body    = "<b> Name  = $name</b> <br> <p> Email  = $email </p> <br> <artical> Msg  = $msg </artical> "  ;

    $mail->send();
    echo '<center><h3> I will reply you within five hours</h3> </center>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
};



?>




