<?php

if(isset($_POST['contact'])){
  

    $fname = $_POST['name_contact'];
    $lname = $_POST['lastname_contact'];
    $email = $_POST['email_contact']; 
    $phone = $_POST['phone_contact'];
    $message = $_POST['message_contact'];
  $to = $email;
  $subject = "Hi " . $fname. " " . ", welcome to Landmark Hospitality....!";
  $body = '
Dear ' . $fname . ',
  Thank you for joining our site. Your request has been successfully submitted to our end our team will contact you shortly.
  Kind Regards,
Landmark Hospitality.
  ';
  $headers = 'From: contact@journeyworlddmc.com';

  if (mail($to, $subject, $body, $headers)) {
    header('location:contact.php?p=3');
  }
  else{
    echo("email failed to sent to user whose email is " . $email);
  }

  // email end

  //self mail
$to_email1 = 'contact@journeyworlddmc.com';
  $subject1 = ' Lotus Hotel Site Response  ';
  $message1 = 'User_name: '.$name.
  "\n" . 'email: '.$email.
  "\n".
  'ph.no: '.$phone.
  "\n".
  'Message: '.$message.
  
  $headers1 = 'From: '.$email;
  mail($to_email1,$subject1,$message1,$headers1);
  //self email end

    }
    else{

      header("location:contact.php?q=101");
    }


if(isset($_POST['bookroom'])){
  

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email']; 
     $room = $_POST['room'];
    $arrival = $_POST['arrival'];
     $departure = $_POST['departure'];

  $to = $email;
  $subject = "Hi " . $fname. " " . ", Welcome to Landmark Hospitality....!";
  $body = '
Dear ' . $fname . ',
  Thank you for joining our site. Your request has been successfully submitted to our end our team will contact you shortly.
  Kind Regards,
Landmark Hospitality.
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
  $subject1 = ' Lotus Hotel Site Response  ';
  $message1 = 'User_name: '.$name.
  "\n" . 'email: '.$email.
  "\n". 'ph.no: '.$phone.
  "\n". 'Arrival Date: '.$arrival.
  "\n". 'departure Date: '.$departure.
  "\n". 'No. of Room : '.$room.
  
  $headers1 = 'From: '.$email;
  mail($to_email1,$subject1,$message1,$headers1);
  //self email end

    }
    else{

      header("location:bookroom.php?q=101");
    }


?>

