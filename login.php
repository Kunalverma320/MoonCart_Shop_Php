<?php
include("config.php");
session_start();
if(isset($_POST['submit']))
{
        $username=$_POST['username'];
        $password=$_POST['password'];
        $ret=mysqli_query($con,"SELECT * FROM users WHERE username='$username' and password='$password'");
        $num=mysqli_fetch_array($ret);
    if($num>0)
    {
        if($num['status']==1){
        if($num['user_role']==1){
        $extra="index.php";
        $_SESSION['username']=$_POST['username'];
        $_SESSION['user_role']=$num['user_role'];
        $_SESSION['customer_name']=$num['name'];
        echo "<script>window.location.href='".$extra."'</script>";
        exit();
        }
        else if($num['user_role']==2){

        $extra="admin/index.php";
        $_SESSION['username']=$_POST['username'];
        $_SESSION['user_role']=$num['user_role'];
        $_SESSION['customer_name']=$num['name'];
        echo "<script>window.location.href='".$extra."'</script>";
        exit();
      }
      }
      
        else
        {
            $_SESSION['error'] = 'Account not activated.';

        }

    }else
        {
            $_SESSION['error'] = 'Email not found';

        }
}   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <center>
        <h1>Login Form</h1>

        <form action="" method="post">
            <?php
                        if(isset($_SESSION['error'])){
                          echo "
                            <div class='callout callout-danger text-center'>
                              <p>".$_SESSION['error']."</p>
                            </div>
                          ";
                          unset($_SESSION['error']);
                        }

                        if(isset($_SESSION['success'])){
                          echo "
                            <div class='callout callout-success text-center'>
                              <p>".$_SESSION['success']."</p>
                            </div>
                          ";
                          unset($_SESSION['success']);
                        }
                      ?>
            <label for="fname">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="lname">Password:</label><br>
            <input type="text" id="password" name="password"><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </center>
</body>

</html>