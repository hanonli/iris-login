<?php 
session_start();
if (isset($_SESSION['ID']) && isset($_SESSION['email'])) {
?>

<!DOCTYPE html>
<html>
<head>
    <title>home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>สวัสดี, <?php echo $_SESSION['name'];?> <?php echo $_SESSION['surname'];?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
?>