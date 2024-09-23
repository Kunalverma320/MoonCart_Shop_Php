<?php 
session_start();

if (strlen($_SESSION['user_role']==2)) {
    
// echo $_SESSION['user_role'];
echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../logout.php">Logout</a>
    <h1><?php echo $_SESSION['username'];   ?></h1>
</body>
</html>


<?php }
else 
{
   header('location:../logout.php'); 
}

 ?>