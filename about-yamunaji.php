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
          <li><a href="about-mahaprabhuji.php">Mahaprabhuji</a></li>
          <li><a class="active" href="about-yamunaji.php">Yamunaji</a></li>
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
            <h4>Yamunaji</h4>
            <h4>Three Forms of Shree Yamunaji:</h4>
            <p>
            In pushtimarg, two mothers are popular. One is Shree Yashodaji and the other is Shree Yamunaji. Shree Yamunaji 
            is the mother of all pushti bhaktas. There are three forms of each element in this universe. These three forms are
            </p>
            <ol>
                <li>Adhidaivik: The divine form</li>
                <li>Adhyatmik: The divine attributes attached with it.</li>
                <li>Adhibhautik: The perceived form</li>
            </ol>

            <h4>Shree Yamunaji has also three forms:</h4>
            <ol>
                <li>Adhidaivik: She is the Fourth patarani of Shree Krishna in Golokdham. This form always resides with Shree Krishna.</li>
                <li>Adhyatmik: Shree Yamunaji's nature and importance is, the one who, knowingly or unknowingly takes the divine water 
                    of Shree Yamunaji, all his sins gets destroyed, all obstacles coming in the way for Bhagwad seva will get destroyed 
                    etc.
                </li>
                <li>Adhibhautik: The River form of Shree Yamunaji that is flowing in Mathura and Shreemad Gokul.</li>
            </ol>
            <p>
            In reality, all these three forms are one and one only. The adhyatmik form resides in the Adhidaivik form and 
            the Adhibhautik form will contain the Adhidaivik and adhyatmik form. Within the adhidaivik form, one form may 
            be a part incarnation or the full incarnation.    
            </p>
            <img src="yamunaji-about.jpg">
            <h4>Kalindiji (of Dwarkaleela) and Shree Yamunaji:</h4>
            <p>   
            The Kalindiji of Dwarkaleela is the part incarnation of adhidaivik form of Shree Yamunaji. The full incarnation of adhidaivik
            form of Shree Yamunaji is in Vraj, where she is the fourth patarani of Shree Krishna.
            </p>
            <h4>Four Groups of Swaminijis:</h4>
            <p>
            There are basically four Yuthas (Groups) of Shree Swaminijis of Shree Krishna. The categorization is based on the divine 
            attributes that each Swaminiji have. The four groups are described as below in sequence:
            </p>
            <ol>
                <li>Shree Radhikaji (Nityashiddha): Tamas bhav main</li>
                <li>Shree Chandravali: Rajas bhav main</li>
                <li>Shree Kumarikas: Satvik bhav main</li>
                <li>Shree Yamunaji: Nirguna bhav main</li>
            </ol>
            <p>Thus, Shree Yamunaji is the leader of the Nirguna class of Shree Swaminijis.</p>
            <h4>Appearance of Shree Yamunaji:</h4>
            <p>
            According to the Yamunamahatmya canto of Padma Purana, the Rigveda, Yajurveda and Samveda are also known as “adhitya”.
            “Aditya” is the another name of purna purushottam. The adhibhautik swaroop of “aditya” is the Sun (Surya) that we daily
            perceive.  Shree Purna Purushottam is of inifinite ras. This ras (anand) is itself Shree Yamunaji. Vedas also describe 
            that Shree Yamunaji appeared from the RAVI MANDAL. The Physical form of Ravi mandal contains the Spiritual form 
            (i.e. Adhyatmik Form) in the form of Vedatrayi. This Spiritual form will contain the divine form (Adhidaivik Form) 
            i.e. Purna Purushottam. Shree yamunaji appeared from this adhidaivik form of Ravi mandal.
            </p>
            <h4>Description of the swaroopa of Shree Yamunaji:</h4>
            <p>
            Shree Yamunaji is the divine form of pushti of Shree Krishna. She is the bestower of all accomplishments of the devotional
            path of pushti.<br>The adhidaivik form (i.e. divine form) of Shree Yamunaji is described as follows:<br>
            Shree Yamunaji appeared from the left part of heart of Shree Krishna. Shree Yamunaji always bears the age of 16 years in 
            Golokdham. She is dark is color, just like Shree Krishna. Shree Yamunaji, in summary, having the same swaroop like Shree 
            Krishna.
            </p>
            <h4>Divine attributes of Shree Yamunaji:</h4>
            <p>  
            According to Shree Yamunashtkaam created by Shree Mahaprabhuji, in praise of Shree Yamunaji, Shree Yamunaji has attributes
            similar to those of Bhagavan Shri Krishna.
            </p>
            <ol>
                <li>Shree Yamunaji is the bestower of all accomplishments of pushtimarg.</li>
                <li>Shree Yamunaji enhances the devotee's devotional in Shree Krishna.</li>
                <li>Shree Yamunaji destroyes all hindrances that come in between the pushti jives and Shri Krishna.</li>
                <li>Shree Yamunaji easily establishes the relation of divine being with  Shri Krishna.</li>
                <li>Shree Yamunaji destroyes evil attributes that have entered into the divine being by the import of age of Kali.</li>
                <li>Just as the devotees of Vraj had obtained Shri Krishna's love by worshipping Shree Yamunaji, similarly Pushti-jivas
                    too, can obtain Shri Krishna's love by reverently drinking its water and bathing into it.
                </li>
                <li>Shree Yamunaji is the bestower of divine body to pushti-being so as to make it suitable for the seva of Shri Krishna.</li>
                <li>The touch of Shree Yamunaji's water is similar to that of Lord Shri Krishna.</li>
            </ol>
        </div>
    </div>
    <!-- ---------------------------------------end information--------------------------------------------- -->
    
    </body>
</html>