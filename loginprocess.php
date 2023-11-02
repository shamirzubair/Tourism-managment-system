<?php
session_start();
include("conn.php");

if (isset($_POST['sub'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = mysqli_query($conn, "SELECT * FROM tour_web WHERE username='$username'");
    $result = mysqli_fetch_assoc($res);

    if ($result && password_verify($password, $result['password'])) {
        $_SESSION["username"] = $result["username"];
        header("location: wel.php");
        exit();
    } else {
        header("location: login.php?err=1");
        exit();
    }
}
?>
