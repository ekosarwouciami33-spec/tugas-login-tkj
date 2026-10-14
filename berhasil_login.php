<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] . "!</h1>"; ?>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>