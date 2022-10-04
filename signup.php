


<?php

extract($_POST);
include('dbconnect.php');
$sql = mysqli_query($con,"SELECT * FROM user WHERE username='$txt'");
if(mysqli_num_rows($sql) > 0){
    echo '<script>alert("Username already exists");
    window.location.replace("register.php");
    </script>';
}
else if(isset($_POST['submit'])){
    $query = "INSERT INTO user VALUES ('$txt','$email','$pswd')";
    $sql = mysqli_query($con,$query);
    echo '<script>alert("You have successfully registered");
    window.location.replace("register.php");
    </script>';
}
else{
    echo '<script>alert("Please try again")</script>';
}

?>

