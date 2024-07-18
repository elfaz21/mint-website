<?php
      $message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){
     if(filter_var( $_post['email'], FILTER_VALIDATE_EMAIL)){


     

    $userName = $_post['name'];
    $userEmail = $_post['email'];
    $userNumber = $_post['number'];
    $messageSubject = $_post['subject'];
    $message = $_post['message'];
    $to = "abrshye21@gmail.com";
    $body = ""
    $body.= "from: ".$userName. "\r\n"
    $body.= "Email: ".$userEmail. "\r\n"
    $body.= "Message: ".$message. "\r\n"
    mail($to,  $messageSubject,  $body.);

    $message_sent = true;


     
}

}

?>