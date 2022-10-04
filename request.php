<?php

extract($_POST);
session_start();
include('dbconnect.php');

if(isset($_POST['submitcontact'])){
    $query = "INSERT INTO contact (name,email,subject,msg) VALUES ('$name','$email','$subject','$message')";
    $sql = mysqli_query($con,$query);
    echo '<script>alert("Your message has been sent");
    window.location.replace("contact.php");
    </script>';
}
else{
    echo '<script>alert("Please try again")</script>';
}

?>