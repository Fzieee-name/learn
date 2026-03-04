<?php
session_start();
$stored_username="admin";
$stored_password="admin";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $stored_username){
    if ($password === $stored_password){
        $_SESSION['username'] = $username;
        header("Location: beranda.php");
        exit;
    } else {
        header("Location: index.php?notif=Maaf password salah.");
        exit;
    }
} else {
    header("Location: index.php?notif=Maaf username salah.");
    exit;
}
