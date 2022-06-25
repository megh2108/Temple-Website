<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        About Website
    </title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="aboutpage.css">   
</head>

<body>

    <!-- --------------------------navigationbar------------------------- -->
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
    <!-- ----------------------------------end navigationbar------------------------- -->
    
    <!-- --------------------------------------vertical navbar------------------------------- -->
    <nav class="navbaro">
      <div class="containero">
        <ul class="vertical-ul">
          <li><a href="about-shrinathji.php">Shrinathji</a></li>
          <li><a class="active" href="about-mahaprabhuji.php">Mahaprabhuji</a></li>
          <li><a href="about-yamunaji.php">Yamunaji</a></li>
          <li><a href="about-pustimarg.php">PustiMarg</a></li>
          <li><a href="about-bawashri.php">PuBawaShri</a></li>
          <li><a href="about-temple.php">AboutTemple</a></li>
        </ul>
      </div>
    </nav>
    <!-- -------------------------------------------end vertcal navbar----------------------------------- -->
    
    <!-- ------------------------------------------------information---------------------------------------- -->
    <div class="set-margin">
        <div class="shrinathji">
            <h4>Vallabhacharyaji ( Mahaprabhuji ) </h4>
            <p>
            A Guru mean - a brilliant Character who commands respect. He must be great. He must be the best also. He must
            be capable of lending the boat of life to cross this materialististic world - like a captain of a ship. He 
            must also possess complete knowledge ; he must be able to point out the performances by during them himself.
            That is not enough. He must be embodiment of devolution such a person has a right to lead his disciples. He 
            should be a perfect Guru to hold that elevated post.
            </p>
            <p>
            "Without a Guru you cannot acquire knowledge. So also without the grace of Guru you cannot realise God. (Govinda)."
            A true Guru is a person who can impart knowledge and make you reach Govinda.' A world accepts such a Guru where his
            greatness reaches far of places. All religions sing his praises. 
            </p>
            <img src="mahaprabhuji-about.jpg">
            <p>   
            Our Hindu Sastras place a Guru on the same sastra of Brahma, Vishnu and Mahesha. Brahma creates the world. A Guru 
            initiates us with "Mantra Diksha". A desciple gets a new phase of him life. Vishnu takes care of the protection of 
            this world. In other words he supports it. Sustain it. A Guru lead us on the true path of our religion. Maheshas work 
            is to destroy the evils of the world. A Guru tries to annimilate our seams, remarks our flaws and clean our performance.
            This parabrahma and parameshwara has matrilised on this earth in the form of a Guru. Hence for a despite a Guru is a 
            directly that parabrahma and parameshwara.
            </p>
            <p>
            Such a complaint Guru helps a person, who comes under the for mans fold, in applying the balm of truth and knowledge 
            to the eyes to under the darkness caused by the blindness of ignorance. He provides a divine vision.    
            </p>
            <p>
            Hence Kabirji - who follows the path of knowledge - had said : "If Guru and Govinda stand before me at the same time. 
            I will front bow the Guru then proceed to bow Govinda - for I could see Govinda only by the Grace of Guru."
            </p>
            <p>  
                Sri Mahaprabhuji had given the character lies of a Guru in his  work called : "Talvardha - Dipa - Nibandha.".
            </p>
            <ol>
                <li>
                    A Guru must have a through knowledge of the secrets of Sri Bhagavata i.e. a deep understanding of it. In other words a 
                    person who has studies sastras thoroughly and holds complete knowledge.
                </li>
                <li>
                    A Guru must also be dedicated to the service of Sri Krishna at all times. He must be one who practiser the sastras he 
                    preaches. First observing the principles personally before moving out to preach.
                </li>
                <li>
                    Guru must also maintain purity, he a self disciplined person, contain "Satvic" nature and without showing off his self.
                </li>
            </ol>
            <p>
            We observe all the three attributes in Sri Mahaprabhuji, Sri Sankracharya, Sri Ramanujacharya and Sri Madhvacharya are pare in 
            creation of Divine. Being Sri Vallabhacharya represents the face of Divine Being. Hence he is considered to be a complete avatara 
            of incarnation.
            </p>
            <p>
            We have must come across another Guru who is grater than Sri Vallbhacharya. He is considered to be the best of Gurus. Hence we 
            call him Sri Mahaprabhuji (Lord) - one step ahead of Prabhu. His life is like the very life of Mahaprabhu. A person bestows on 
            common men like us, a better ideal life.    
            </p>
        </div>
    </div>
    <!-- ---------------------------------------end information--------------------------------------------- -->
    
    </body>
</html>