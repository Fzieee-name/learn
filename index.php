<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login1</title>
    </head>
<body>
    <?php
    if (isset($_GET['notif'])){
        $notif = $_GET['notif'];
        echo '<h4>'.$notif.'</h4>';
    }
    ?>
    <form action="login_proses.php" method="POST">
        <label>username = </label><input type="text" name="username">
        <br>
        <label>password = </label><input type="password" name="password">
        <br>    
        <input type="submit" value="login">
    </form>
</body>
</html>