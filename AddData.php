<?php
$con = mysqli_connect("localhost:4306", "root", "", "online_shop");
if (!$con) {
    die("Connection Fail: " . mysqli_connect_error());
} else {
    echo "<script>alert('Connection DONE')</script>";
}


if (isset($_POST['submit'])) {
    echo "<script>alert('Method POST')</script>";
    $name = $_POST['user_Name'];
    $Adress = $_POST['user_Address'];
    $Phone = $_POST['user_Phone'];
    $email = $_POST['user_Email'];
    $Password = md5($_POST['user_Password']);
    $DOB = $_POST['user_Birthday'];
    echo $name;
    $sql = "INSERT INTO `user` (`User_Name`, `User_Birthday`, `User_Address`, `User_Mail`, `User_Pass`, `User_Phone`)
    VALUES ('$name','$DOB','$Adress','$email','$Password','$Phone')";
    $result = mysqli_query($con, $sql);
    if (mysqli_affected_rows($con) == 1) {
        echo "<script>alert('Data Added')</script>";
    } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
    }
}
?>
