<?php


     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];
   

    // Database Connection

     $conn = new mysqli('localhost', 'id20171642_contact', '+~U/87a/vr2Sc0-7', 'id20171642_contact_form');

    if ($conn->connect_error){
     die ('Connection Failed : '.$conn->connect_error);
  }   else{
      $stmt = $conn->prepare("Insert into form(name, email, message) values (?, ?, ?)");
      $stmt->bind_param("sss",$name, $email, $message);
      $stmt->execute();
       echo "Your message has been sent Successfully...";
      $stmt->close();
      $conn->close();
  }

?>
