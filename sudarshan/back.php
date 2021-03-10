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
  $subject = "Hi " . $name. " " . ", welcome to Sudarshan....!";
  $body = '
Dear ' . $name . ',
  Thank you for joining our site. Your request has been successfully submitted to our end our team will contact you shortly.
  Kind Regards,
Sudarshan
  ';
  $headers = 'From: contact@journeyworlddmc.com';

  if (mail($to, $subject, $body, $headers)) {
    header('location:contacts.php?p=3');
  }
  else{
    echo("email failed to sent to user whose email is " . $email);
  }

  // email end

  //self mail
$to_email1 = 'contact@journeyworlddmc.com';
  $subject1 = ' Sudarshan site response  ';
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
//Book Room
    if(isset($_POST['submitt'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $number = $_POST['number'];
      $numberr = $_POST['numberr'];
    $date = $_POST['date'];
    $datee = $_POST['datee'];
     $guest = $_POST['guest'];
 
  
      
   
// email code
  $to = $email;
  $subject = "Hi " . $name. " " . ", welcome to Sudarshan....!";
  $body = '
Dear ' . $name . ',
  Thank you for joining our site. Your request has been successfully submitted to our end our team will contact you shortly.
  Kind Regards,
Sudarshan
  ';
  $headers = 'From: contact@journeyworlddmc.com';

  if (mail($to, $subject, $body, $headers)) {
    header('location:bookroom.php?p=3');
  }
  else{
    echo("email failed to sent to user whose email is " . $email);
  }

  // email end

  //self mail
$to_email1 = 'contact@journeyworlddmc.com';
  $subject1 = ' Sudarshan site response  ';
  $message1 = 'Customer Name: '.$name.
  "\n" . 'Email: '.$email.
  "\n".
  'Phone.no: '.$phone.
  "\n".
  'Number of Room: '.$number.
   "\n".
  'Arrival Date: '.$date.
   "\n".
  'Departure Date: '.$datee.
   "\n".
  'Number Og Guest: '.$numberr.
  "\n".
  'Room Type: '.$guest.
  "\n".
  $headers1 = 'From: '.$name;
  mail($to_email1,$subject1,$message1,$headers1);
  //self email end

    }
    else{

      header("location:bookroom.php?q=101");
    }
?>
