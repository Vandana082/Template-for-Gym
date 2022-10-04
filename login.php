<?php
session_start();
extract($_POST);
include ('dbconnect.php');

$sql = mysqli_query($con,"SELECT * FROM user WHERE email='$name' or username='$name' and password='$pswd'");
if(mysqli_num_rows($sql) === 1){
    $row = mysqli_fetch_assoc($sql);
    if(($row['email']===$name or $row['username']===$name) and $row['password']===$pswd){
        echo "logged in";
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        echo '<script>alert("Valid user")</script>';
        header("Location: contact.php");

        exit();
    }
    echo '<script>alert("Invalid user")</script>';
  // header("Location: http://localhost/LittleFox/register.php");

    //exit();
}
echo '<script>alert("Invalid user")</script>';
//header("Location: index.php?error=Incorect User name or password");

//exit();

?>