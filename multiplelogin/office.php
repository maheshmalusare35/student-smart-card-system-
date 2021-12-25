<?php session_start();
if (!isset($_SESSION['username'])) {
    header("Location: indexnew.php");
}

 ?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Multilogin System</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>
</body>
</html>