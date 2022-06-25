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
    
    <ul class="vertical-ul">
      <li><a href="about-shrinathji.php">Shrinathji</a></li>
      <li><a href="about-mahaprabhuji.php">Mahaprabhuji</a></li>
      <li><a href="about-yamunaji.php">Yamunaji</a></li>
      <li><a href="about-pustimarg.php">PustiMarg</a></li>
      <li><a href="about-bawashri.php">PuBawaShri</a></li>
      <li><a class="active" href="about-temple.php">AboutTemple</a></li>
    </ul>
    
    <!-- -------------------------------------------end vertcal navbar----------------------------------- -->
    
    <!-- ------------------------------------------------information---------------------------------------- -->
    <div class="set-margin">
        <div class="shrinathji">
            <h4>About Temple</h4>
            <p>
            Shrinathji is the real form of Lord Shri Krishna situated at the door of Nikunj. You are calling your devotees to you
            by raising your left (left) hand. As if you are saying Mr. - "My dearest darling! You have been separated from me 
            for thousands of years. I don't like it without you. Come come near me and have the juice of Leela. "Lord, the 
            left part is the form of confirmation. Calling the devotees by raising the left hand means that the Lord does not 
            consider the eligibility, merit and disqualification of His confirmed devotees and does not expect from them the means 
            for God realization as stated in the scriptures. They are terrifying the poor people by being kind to them. Sri Hasta 
            is also raising high and indicating that the lil-rasa he is inviting the devotees to drink, he wants to engross the 
            devotee in Bhajanananda by lifting him above the worldly pleasures and Brahmananda.
            </p> 
            <p>
            Param Prabhu Shrinathji The form is a storehouse of divine beauty and a treasure trove of melody. Everything about 
            Madhuradhipati Shrinathji is sweet.With his beauty and melodiousness, he attracts the devotees in such a way that the
            devotee forgets all the body-object-relatives-world, forgets all and gets absorbed in GOD, becomes completely trapped
            in Him. This is what is meant by the Lord tying his fist to the hearts of the devotees. In fact, GOD does not hold the
            mind of His devotees in his fist, he keeps the precious gems of the devotee-mind filled with love of God in his fist. 
            That is why Shrinathji is standing calmly by keeping the fist of Shri Hast tied on the south (right) side of his forehead. 
            Right Shreehasta signifies the compatibility of the Lord. This cleverness of the Lord is directly visible in the form 
            of Shrinathji. Lord Shrinathji is standing in the dance posture. This is the soulful posture of Rasleela, of the 
            self-realization of the Lord with the Gopis in the form of self. Rasaras is the ultimate juice, the ultimate fruit. 
            The Lord wants to give the same to the devotees.
            </p>
            </p>
            <img src="Shrinathji's Swrup.jpg">
            <p>   
            Shrinathji has a tie on his head, as if Shri Swaminiji has decorated the hair of the Lord and tied it in the form of 
            a bundle. There are holes in the ear and nostrils done by Mother Yashoda at the time of ear-piercing-sanskar. You are 
            wearing a thin garland 'Kanthasiri' in Shrikanth. The Lord has put on 'Taniya' (small cloth) on the cut. The 'Tanmala'
            which hangs below the knee is also worn by the Lord. You have a string in your hand, which is as if lovingly worn by
            Shri Swamiji. This form of Nikunjanayak Shri Nathji is of adolescence. Lord Shri Krishna is basically black color. 
            Shyam is the color of makeup rasa. Lord Shrinathji is Shringar Rasa, the ultimate form of love. It is as if it is 
            emerging in his form. Therefore, it is natural for Aapshree to have a black color, but one of the specialties in the
            form of Shrinathji is that the affection that rises in his form towards the devotees, hence the redness of affection 
            is also reflected in his shyness. That is why the form of Shrinathji is of red colored black color. GOD's gaze is 
            facing and slightly downwards because He is casting a loving, merciful look on the devotees who take refuge. This 
            gracious sight of Lord Shrinathji is everything for the devotees of Pushti.
            </p>
            <p>  
            The description of the form of Lord Shrinathji, the omnipresent form of Pushtimarg, has been described in 
            'Anubhashya-Prakash-Rashmi'.
            </p>
        </div>
    </div>
    <!-- ---------------------------------------end information--------------------------------------------- -->
    
    </body>
</html>    