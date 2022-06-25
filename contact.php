<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Index Website
    </title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header.css">  
    <link rel="stylesheet" href="contact.css">  
</head>

<body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="image-dailydarshan.php">IMAGES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="video-all.php">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about-shrinathji.php">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="loginbtn">
                <?php
                    if($_SESSION["username"])
                    {
                        ?>
                            <a style="color:white;font-weight:900px;margin-left:200px" class="nav-link" href="logout.php" onclick="logout()">
                                Hello <?php echo $_SESSION["username"]; ?>
                            </a>
                            <script>
                                function logout()
                                {
                                    confirm("Are you sure you want to logout?");
                                }
                            </script>
                        <?php
                    }
                    else
                    {
                         ?>
                            <a class="nav-link" href="loginform.php">
                                <i style="color:white;margin-left:300px" class="fa fa-user-circle"></i>
                            </a>
                        <?php
                    }
                ?>
            </div>
        </nav>
    </section>

    <section id="banner-contact">
        <div class="text-box">
            <h1>Contact Us</h1>
        </div>
    </section>

    <!-- ----------------------------Contact------------------------------------------ -->

    <div class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.6195277866714!2d72.95474601491054!3d22.555920985191367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e8339752cb7%3A0x2ff41829570863eb!2sSrinathji%20Bethak%20Mandir%2C%20Anand!5e0!3m2!1sen!2sin!4v1649125445466!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="contactus">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <span>
                        <h5>Gamdi Vad, Sardar Ganj</h5>
                        <p>Anand, Gujarat 388001</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>9898745623</h5>
                        <p> 9AM to 7PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>bethak5656@gmail.com</h5>
                        <p>Email us your query</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="">
                    <input type="text" placeholder="Enter your name" required>
                    <input type="text" placeholder="Enter email" required>
                    <input type="text" placeholder="Enter your subject" required>
                    <textarea rows="8" placeholder="Message" required></textarea>
                    <button type="submit" class="send-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <!-- ----------------------------Contact end------------------------------------------ -->
    
    

    <!-- ------------------------social media section---------------------------- -->

    <div id="social-media">
        <div class="container text-center">
            <h1>Find Us On Social Media</h1>
            <div class="social-icon">
                <a href="https://www.facebook.com/Shree-Dwarkadhish-Bethak-Mandir-Anand-112647566774161/?msclkid=0436edfdb4e911ecb36a04f4f51d36f8"><img src="facebook-icon.png"></a>
                <a href="https://www.instagram.com/bethak_mandir_anand/?hl=en"><img src="instagram-icon.png"></a>
                <a href="#"><img src="whatsapp-icon.png"></a>
                <a href="https://www.youtube.com/channel/UCFuXo9QsJtWksWXHU3_zuqQ/videos"><img src="youtube-icon.jpg"></a>
            </div>
        </div>
    </div>

    <!-- ------------------------------End social media section---------------------------- -->

</body>
</html>