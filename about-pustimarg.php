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
      <li><a class="active" href="about-pustimarg.php">PustiMarg</a></li>
      <li><a href="about-bawashri.php">PuBawaShri</a></li>
      <li><a href="about-temple.php">AboutTemple</a></li>
    </ul>
    
    <!-- -------------------------------------------end vertcal navbar----------------------------------- -->
    
    <!-- ------------------------------------------------information---------------------------------------- -->
    <div class="set-margin">
        <div class="shrinathji">
            <h4>Pusti Marg - A Vedic Sampraday</h4>
            <p>
            According to Shreemad Vallabhacharyaji, following are some of apshri’s teachings and principles about Ved marg:<br>
            According to Shree Bhagwatarth Prakaran (9,33 Subodhiniji): Shree Mahaprahuji compares the Vedas to the enlighted 
            swaroop of Shree Bhagwan. Vedas enlightens the swaroop of bhagwan and is compared with Shree Prabhu’s Pitambar. 
            Just like the rays of sun enlightens and makes the view of sand clearer, same way, Vedas makes us to know the swaroop 
            of bhagwan clearer.
            </p>
            <ul>
                <li>Vedas are given simile of Kalptaru by Shree Mahaprabhuji.</li>
                <li>Vedas have two kandas i.e. Gyan kand and Yagya kand. These both kandas supports each other and not have to be 
                    taken independently. (Bha gwatarth Prakaran, 1,1, Subodhini)
                </li>
                <li>Vedas are the Naam Shrusti of ParBrahm. Vedas are Sanatan and Nitya. They appear and disappear but are never 
                    created and destroyed.
                </li>
                <li>Vedas have Shaakhas i.e. Branches. The objective of different Branches is described by Shree Vallabhacharyaji 
                    in Bhagwatarth Prakaran (3,21 Subodhini)
                </li>
                <li>According to Sarvaniryana Prakaran of Shree Acharyaji, ‘Those who want to lead a truthful and devout life 
                    (Dharma-acharan) must abstain from those who criticize Vedas and do not believe in Vedas. (Sarvanirnaya Prakaran)
                </li>
                <li>Ved Marg is protected by those who implements the teachings of Vedas and lives their life according to Vedas. 
                    Brahmins are regarded as Adhibhautik Swaroop of Vedas and thus Brahmins are regarded as the protector of Vedas.
                </li>
                <li>The three sadhans to know Vedas are 1. Bhagwad Prasad 2. Tap 3. Ved yukti, from which Bhagwad Prasad is most important.</li>
                <li>The meaning of Vedas must be understood only on the basis of ‘Sabda Vichar’ and not on false logic. The meaning of the
                    words of Vedas must be interpreted according to the meaning of ‘Dhaatu’ and “Shabdas’ by Paani and other Shabdacharyas. 
                    False imaginations and logic is forbidden in interpreting Vedas.
                </li>
            </ul> 
            <img src="pustimarg-about.gif" srcset="pustimarg-about.gif 376w,pustimarg-about.gif 512w" sizes="(max-width: 700px) 300px,512px" style="margin-left:20px">
            <h4>Shuddha-advaita Pushtimargiya Vangmay Classification:</h4>
            <ol style="color:rgb(95,8,8);font-weight:700">
                <li>Praman Granthas</li>
                <li>Pramey Granthas</li>
                <li>Sadhan Granthas</li>
                <li>Fal Granthas</li>
            </ol>
            <h4>1. Praman Granthas section:</h4>
            <p>   
                Shree Vallabhacharyaji has accepted following as pramanas:<br>
                <ol>
                    <li>Veda Chatustay: Consisting Samhita, Mantra sections and Upanishads.</li>
                    <li>Shree Krishna Vakya: Shreemad bhagwad Geetaji</li>
                    <li>Vyas Sutras (Brahmsutras), Uttar Mimansa</li>
                    <li>Samadhi Bhasa (Shreemad Bhagwat Mahapuran)</li>
                    <li>Other shastras that are coherent, compatible and consistent with the above four shastras.</li>
                </ol>
            </p>
            <p>
            Shreemad Vallabhacharyaji is the only acharya who focused on the significance and importance of Shreemad 
            Bhagwat Mahapuran which enjoys the unique position in shastras. Shreemad Bhagwat Mahapuran, which is 
            considered as to be originated from the ‘Samadhi’of Shree Ved Vyas, is also known as ‘Nigam Kalpataru Fal’ 
            i.e. the ripe fruit of Ved rupi kalpataru.Vedas are Kalpatura (i.e. Divine tree) and Shreemad Bhagwat is 
            the ripe fruit of this tree i.e. it’s the essence of entire Vedas. Shreemad Vallabhacharyaji is the first 
            and the only acharya who gave a respectable position to Shreemad Bhagwat Mahapuran in the level of Vedas 
            to be considered as one of the ‘Pramanas’ in Shuddha-advaita Darshan.
            </p>
            <p>
            Shreemad Vallabhacharyaji proclaimed the ‘Shuddha-advaita’ siddhant in such a way so as to interprete all 
            shastras consistently and coherently. Shreemad Vallabhacharyaji orders in Shastrarth Prakaran about the Four 
            Pramanas of his darshan. Further apshri orders that Doubts originating from Vedas must be resolved by reading 
            Shreemad Geetaji, doubts originating from Shreemad Geetaji must be resolved by reading Brahmsutras and doubts 
            originating from Brahmsutras must be resolved by reading Shreemad Bhagwat Mahapuran.
            </p>
            <p>  
            Thus Shree Mahaprabhuji accepts ‘Shabda Pramanas’.
            </p>
        </div>
    </div>
    <!-- ---------------------------------------end information--------------------------------------------- -->
    
    </body>
</html>    