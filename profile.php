<?php

require "php/databaseBroker.php";
require "php/savedmovies.php";

session_start();

if(!isset($_SESSION['user_id'])){
    header('Location: index.php');
    exit();
}

$data = Movie::getAll($conn);

if(!$data){
    echo "Error!";
    die();
}

if($data->num_rows==0){
    echo "Nothing saved.";
    die();
}
else {
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
    <link rel="stylesheet" href="profile.css">
</head>
<body>
     
    <header>
        <div class="container">
            <section class="logo"> <a href="#"><img src="images/film.png" alt="film" class="logo-icon film"><strong>Movies</strong></a></section>

             <nav>
            <ul>
                <li><a href="movies.php">Movies</a></li>
                <li><a href="aboutUs.php">About us</a></li>
                <li><a href="aboutUs.php#contactus">Contact</a></li>
                <li class="profile-menu">
                    <a href="#"><img src="images/profile-user.png" alt="profile" class="logo-icon"></a>
                    <div class="sub-menu">
                    <div class="dropdown-menu">
                        <a href="profile.php"><img src="images/saved.png" alt="saved">Saved movies</a>
                        <a href="settings.php">My profile</a>
                        <a href="index.php">Log out <img src="images/logout.png" alt="out"></a>
                    </div>
                    </div>
                </li>
                <li class="menu-icon"><a href="#"><img src="images/hamburger.png" alt="menu icon"></a>
                <div class="ham-menu">
                <div class="sub-menu-small-desktops">
                <a href="#">Movies</a>
                <a href="aboutUs.php">About us</a>
                <a href="aboutUs.php#contactus">Contact</a>
                <a href="profile.php"><img src="images/saved.png" alt="saved">Saved movies</a>
                <a href="settings.php">My profile</a>
                <a href="index.php">Log out <img src="images/logout.png" alt="out"></a>
                </div>
                </div>
                </li>
            </ul>
            </nav>
        </div>
    </header>

    <div class="container">

    <div class="table">
    <h2>Liked movies</h2>
    <div class="search">
        <input type="text" placeholder="Search here..."> 
        <button><img src="images/search.png" alt="search"></button>
    </div>
    <div class="cells">
    <table class="saved-movies">
        <thead>
            <th>Movie title</th>
            <th>Category</th>
            <th>Actors</th>
            <th>Share</th>
            <th>Delete</th>
        </thead>
        <tbody>

        <?php
            while($row = $data->fetch_array()):
        ?>

            <tr>
                <td><?php echo $row["movie_title"] ?></td>
                <td><?php echo $row["category"] ?></td>
                <td><?php echo $row["actors"] ?></td>
                <td><img src="images/share.png" alt="share" id="share-movie"></td>
                <td><img src="images/bin.png" alt="bin" id="delete-movie"></td>
            </tr>
            <?php
            endwhile;
        }
            ?>
           

        </tbody>
        <tfoot>

        </tfoot>

    </table>
    </div>

    </div>



    </div>

    <footer>

        <div class="footer-nav">
            <div class="container">
                <ul>
                    <li class="list-title">Categories</li>
                    <li><a href="movies.php#movies">Movies</a></li>
                    <li><a href="#">??????</a></li>
                </ul>
                <ul>
                    <li class="list-title">About us</li>
                    <li><a href="aboutUs.php#our-story">Our story</a></li>
                    <li><a href="aboutUs.php#our-team">Our team</a></li>
                </ul>
                <ul>
                    <li class="list-title">Social media</li>
                    <li><a href="https://www.facebook.com/"><img src="images/fb.png" alt="fb" class="social-media-icon"></a></li>
                    <li><a href="https://www.instagram.com/"><img src="images/ig.png" alt="fb" class="social-media-icon"></a></li>
                </ul>
                <ul>
                    <li class="list-title">Customer service</li>
                    <li><a href="aboutUs.php#contactus">Contact</a></li>
                    <li><a href="aboutUs.php#FAQ">FAQ</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            Kristina123455 &copy; All Rights Reserved
        </div>

    </footer>
</body>
</html>