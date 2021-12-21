<?php
session_start();
if(isset($_POST['login']))
{
    extract($_POST);
    include 'databaseBroker.php';
    extract($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM user where email='$email' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["user_email"] = $row['email'];
        $_SESSION["user_pass"]=$row['password'];
        $_SESSION["user_firstname"] = $row['first_name'];
        $_SESSION["user_lastname"] = $row['last_name'];
    }
    else
    {
        echo `<script type="text/javascript>`;
        echo `alert("Invalid Email or Password, try again.")`;
        echo `window.location.href="index.php"`;
        echo `</script>`;
    }
    if(isset($_SESSION['user_email'])){
        header("Location: ../movies.php");
    }
}
?>
