<?php 

session_start();
if(isset($_POST['save_changes'])){
    extract($_POST);
    include 'databaseBroker.php';
    $user_id = $_SESSION['user_id'];
    
    $query = "SELECT * FROM  user where email='".$_POST['email']."'";
    $result=mysqli_num_rows(mysqli_query($conn,$query));

    $selected_user = "SELECT id FROM  user where email='".$_POST['email']."'";

    if($result>0 && $user_id==$selected_user)
    {  
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Inserted email already exsist! :( ');
    window.location. href='../settings.php';
    </script>");
    }
    else
    {

        $query = "UPDATE user 
        set first_name=' ". $_POST['firstName']." ',
        last_name='".$_POST['lastName']."',
        email='".$_POST['email']."',
        password='".$_POST['password']."' 
        WHERE id=$user_id ";
    
        $sql = mysqli_query($conn, $query);
    
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Record Modified Successfully-Login again to update data');
        window.location. href='../index.php';
        </script>");
    //window.location. href='../index.php';
    }


}

?>