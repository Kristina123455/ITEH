<?php
include("databaseBroker.php");

extract($_POST);
$query = "SELECT * FROM user where email='$email'";
$sql=mysqli_query($conn,$query);
if(mysqli_num_rows($sql)>0)
{
    echo "Email Already Taken, try again."; 
	exit;
}
if(isset($_POST['register'])){
        $query="INSERT INTO user VALUES (null,'$firstName', '$lastName', '$email', '$password')";
        $sql=mysqli_query($conn,$query);
        $_SESSION["user_email"] = $row['email'];
        $_SESSION["user_pass"]=$row['password'];
        $_SESSION["user_firstname"] = $row['first_name'];
        $_SESSION["user_lastname"] = $row['last_name'];
        if(!$sql){ die("Could Not Perform the Query");};
        header ("Location: ../movies.php");
}
else {
    echo "Error.Please try again";
}

?>