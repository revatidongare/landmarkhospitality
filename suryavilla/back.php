<?php

if(isset($_POST['submit'])){
    // include 'config.php';

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
 
    $message = $_POST['message'];
      
   
// email code
  $to = $email;
  $subject = "Hi " . $name. " " . ", welcome to Survilla....!";
  $body = '
Dear ' . $name . ',
  Thank you for joining our site. Your request has been successfully submitted to our end our team will contact you shortly.
  Kind Regards,
Survilla
  ';
  $headers = 'From: pallavi@journeyworlddmc.com';

  if (mail($to, $subject, $body, $headers)) {
    header('location:contacts.php?p=3');
  }
  else{
    echo("email failed to sent to user whose email is " . $email);
  }

  // email end

  //self mail
$to_email1 = 'pallavi@journeyworlddmc.com';
  $subject1 = ' Survilla site response  ';
  $message1 = 'User_name: '.$name."" .$lastname.
  "\n" . 'Email: '.$email.
  "\n".
  'Phone.no: '.$phone.
  "\n".
  'Message: '.$message.
  
  $headers1 = 'From: '.$name;
  mail($to_email1,$subject1,$message1,$headers1);
  //self email end

    }
    else{

      header("location:contacts.php?q=101");
    }
?>
