<?php
//php code to sent contact form to both client and owner
  if(isset($_POST['submit'])){
    //check if user inter  data
    $mailto = "abrshye21@gmail.com"; //my email adress
    $from = $_POST['email']; //senders email adress
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = $_POST['your Message Submitted Successfully']; //for client
    $number = $_POST['number'];
    $message = "Client Name: " .name."wrote the following message". "\n\n". $_POST['message'];
    $message2 = "dear". $name."\n\n" "thank you for contacting us! we will get back to you soon"; //this is for the sender 
    $headers = "from: ". $from; //user entered email adress
    $headers2 = "from: ". $mailto; //this will recieve to client
    $result = mail($mailto, $subject, $message, $headers); //send email to website owner
    $result = mail($from, $subject2, $message2, $headers2); //send email to client
    if($result){
        echo '<script type="text/javascript">alert("message was sent successfully, we will contact you soon")
        
        </script>'
    }else{
        echo '<script type="text/javascript">alert("submission faild! try again later")
        
        </script>'
    }

  }
?>