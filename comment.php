<?php

extract($_POST);
session_start();
include('dbconnect.php');

if(isset($_POST['submitcomment'])){
    $query = "INSERT INTO comment (msg,name,email) VALUES ('$message','$name','$email')";
    $sql = mysqli_query($con,$query);
    echo '<script>alert("Your comment has been sent");
    window.location.replace("about.php");
    </script>';
}
else{
    echo '<script>alert("Please try again")</script>';
}

?>