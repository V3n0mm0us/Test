<?php
session_start();
if(!isset($_SESSION['username'])){
    include("login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Homepage</title>
</head>
<body>
    <div class="menu-area">
        <ul>
            <li>Halaman Awal</li>
            <li><a href="cari_user.php"><span>Data Karyawan</span></a></li>
            <li>Export Data
                <ul class="dropdown">
                    <li><a href="export.php">Export</a></li>
                </ul>
            </li>
            <li><a href="logout.php"><span>Logout</span></a></li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
    <h1 class="title" style="--duration: 1s">
      <span style="--delay: 0.5s">PT Akui</span>
      <span style="--delay: 0.8s">Bird Nest</span>
      <span style="--delay: 1s">Indonesia</span>
    </h1>
    </center>
</body>
</html>