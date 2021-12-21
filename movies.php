<?php

session_start();
include "php/databaseBroker.php";

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
    <script src="javascript/javascript.js"></script>
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
                        <a href="php/logout.php">Log out <img src="images/logout.png" alt="out"></a>
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
                <a href="php/logout.php">Log out <img src="images/logout.png" alt="out"></a>
                </div>
                </div>
                </li>
            </ul>
            </nav>
        </div>
    </header>

    <section class="welcome-user">
        <div class="container">
        <div class="welcome"><h2>Welcome <?php echo $_SESSION['user_firstname'] ?> </h2></div>
        </div>
    </section>

    <section class="hero">
    <div class="hero">
        <img src="images/hero-image.jpg" alt="hero image" class="hero-img">
    </div>
    <div class="hero-content">
        
    <div class="container">
        <h1>Join the club</h1>
        <p>Click the button, leave an e-mail and be one of the first to be notified of the new movies, news & more!</p>
        <button>NEWSLETTER</button>
        </div>
    </div> 
</section>

    <section id="movies" class="best-movies">
        <h2>Best movies</h2>
        <hr>
        <div class="movie-slider">
            <div class="container">

            <div class="movie">
                <span class="like"><img src="images/like.png" alt="add"></span>
                <div class="movie-picture">
                    <img src="images/movie1.jpg" alt="movie-img">
                </div>
                <div class="movie-info">
                    <h5 class="categories">family, comedy</h5> 
                    <h4 class="movie-title">Xmas with the Kranks</h4>
                    <button>READ MORE</button>
                </div>
            </div>

            <div class="movie">
                <span class="like"><img src="images/like.png" alt="add"></span>
                <div class="movie-picture">
                    <img src="images/movie1.jpg" alt="movie-img">
                </div>
                <div class="movie-info">
                    <h5 class="categories">family, comedy</h5> 
                    <h4 class="movie-title">Xmas with the Kranks</h4>
                    <button>READ MORE</button>
                </div>
            </div>

            <div class="movie">
                <span class="like"><img src="images/like.png" alt="add"></span>
                <div class="movie-picture">
                    <img src="images/movie1.jpg" alt="movie-img">
                </div>
                <div class="movie-info">
                    <h5 class="categories">family, comedy</h5> 
                    <h4 class="movie-title">Xmas with the Kranks</h4>
                    <button>READ MORE</button>
                </div>
            </div>

            <div class="movie">
                <span class="like"><img src="images/like.png" alt="add"></span>
                <div class="movie-picture">
                    <img src="images/movie1.jpg" alt="movie-img">
                </div>
                <div class="movie-info">
                    <h5 class="categories">family, comedy</h5> 
                    <h4 class="movie-title">Xmas with the Kranks</h4>
                    <button>READ MORE</button>
                </div>
            </div>

            <div class="movie">
                <span class="like"><img src="images/like.png" alt="add"></span>
                <div class="movie-picture">
                    <img src="images/movie1.jpg" alt="movie-img">
                </div>
                <div class="movie-info">
                    <h5 class="categories">family, comedy</h5> 
                    <h4 class="movie-title">Xmas with the Kranks</h4>
                    <button>READ MORE</button>
                </div>
            </div>
            
            <div class="movie">
                <div class="movie-picture">
                    <img src="images/movie1.jpg" alt="movie-img">
                </div>
                <div class="movie-info">
                    <h5 class="categories">family, comedy</h5> 
                    <h4 class="movie-title">Xmas with the Kranks</h4>
                    <button>READ MORE</button>
                </div>
            </div>

            <div class="movie">
                <div class="movie-picture">
                    <img src="images/movie1.jpg" alt="movie-img">
                </div>
                <div class="movie-info">
                    <h5 class="categories">family, comedy</h5> 
                    <h4 class="movie-title">Xmas with the Kranks</h4>
                    <button>READ MORE</button>
                </div>
            </div>
            
            <div class="movie">
                <span class="like"><img src="images/like.png" alt="add"></span>
                <div class="movie-picture">
                    <img src="images/movie1.jpg" alt="movie-img">
                </div>
                <div class="movie-info">
                    <h5 class="categories">family, comedy</h5> 
                    <h4 class="movie-title">Xmas with the Kranks</h4>
                    <button>READ MORE</button>
                </div>
            </div>

            <div class="movie">
                <span class="like"><img src="images/like.png" alt="add"></span>
                <div class="movie-picture">
                    <img src="images/movie1.jpg" alt="movie-img">
                </div>
                <div class="movie-info">
                    <h5 class="categories">family, comedy</h5> 
                    <h4 class="movie-title">Xmas with the Kranks</h4>
                    <button>READ MORE</button>
                </div>
            </div>

            <div class="movie">
                <span class="like"><img src="images/like.png" alt="add"></span>
                <div class="movie-picture">
                    <img src="images/movie1.jpg" alt="movie-img">
                </div>
                <div class="movie-info">
                    <h5 class="categories">family, comedy</h5> 
                    <h4 class="movie-title">Xmas with the Kranks</h4>
                    <button>READ MORE</button>
                </div>
            </div>

        </div>
        </div>
    </section>

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