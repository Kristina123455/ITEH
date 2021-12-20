
<?php

    include "php/databaseBroker.php";
    include "php/user.php";
    session_start();
    
    if(isset($_POST['login'])){
        $uemail = $_POST['email'];
        $upass = $_POST['password'];
echo "proslo";
        //$conn = new mysqli();

        echo "bez login";
        $korisnik = new User(1, $uemail, $upass);

        $odg = User::login($korisnik, $conn); //pristupanje statickim funkcijama preko klase 
        
        if($odg){ 
            echo "ovde";
            echo
            ` <script>
            console.log("Uspesno ste se ulogovali");
            </script>`;

            $_SESSION['user_id'] = $korisnik->id;
            header('Location: movies.php');
            exit();
        }else{
            echo
            ` <script>
            console.log("Niste se uspesno ulogovali");
            </script>`;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="images/film.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIES</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="container">
        
        <div class="sign-in">
            <img src="images/hello.png" alt="welcome">
            <form action="" method="post">
                <h2>Login</h2>
                <p>Enter Login Details</p>
                <div class="form-info">
                    <input type="email" name="email" placeholder="Email" required="required">
                    <input type="password" name="password" placeholder="Password" required="required">
                    <button type="submit" name="login" >Login</button>
                </div>
                <div class="sign-up-alt">Don't have an account? <a href="register.php">Register Here</a></div>
            </form>
        </div>

    </div>
    

</body>
</html>