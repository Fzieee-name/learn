<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Beranda!!!!!!!!!!!!!!!!</title>
</head>
<?php
session_start();
if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
} else {
    header('Location: index.php?notif=Login terlebih dahulu BUNG');
}
?>
<body>
    <h1>Welcome <?php echo $username;?></h1>
    <p>di beranda</p>
    <a href="logout.php">Logout</a>
</body>
</html>
