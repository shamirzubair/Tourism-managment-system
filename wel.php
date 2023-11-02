<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin-top: 100px;
        }
        .welcome {
            font-size: 24px;
            color: #333;
        }
        button{
            background-color: #3498db;
            display: inline-block;
            font-size: 16px;
            border: 6px solid #3498db;
            color: #fff;
            border-radius:4px;
            cursor:pointer;
            text-decoration:none;
            transition: background-color 0.3s ease
        }
    </style>
</head>
<body>
    <div class="welcome">
        <?php echo "Hello " . $_SESSION["username"] . ", you can use this website!"; ?>
    </div>
    <a href="welcome.php">
        <button>
            Visit Our Website
        </button>
    </a>
</body>
</html>
        