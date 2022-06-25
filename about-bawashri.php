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
      <li><a class="active" href="about-bawashri.php">PuBawaShri</a></li>
      <li><a href="about-temple.php">AboutTemple</a></li>
    </ul>
    
    <!-- -------------------------------------------end vertcal navbar----------------------------------- -->
    
    <!-- ------------------------------------------------information---------------------------------------- -->
    <div class="set-margin">
        <div class="shrinathji">
            <h4>P.P.G. 108 Shree Vagishkumar Bawashri (Yuvraj-Kankroli) </h4>
            <img src="vagishkumarji.gif">
            <h4>Date of Birth and Education</h4>
            <p>
            4th June, 1965<br>
            Education: M.A., Ph. D. (Naturopathy), Ph. D. (In Literature) by International University of Contemporary Studies-Washington DC, USA
            </p> 
            <h4>Introduction</h4>
            <p>
            Dr. Vagishkumar Goswami was born to Trutiya Gruhadhish Kankroli Naresh Pujya Goswami 108 Shree Vrajeshkumar Maharajshri 
            and Pujya Shree Rashmika Vahuji, in the well cultured and well educated pedigree of Vellanadu Brahmin family, in the 
            lineage of JagadGuru Shreemad Vallabhacharya Mahaprabhuji. From the very childhood, Shree Vagishkumarji, holding the 
            extra-ordinary faculty, has been leading his awe-inspiring personality befitting his name "Vag-Ish" i.e. "Master of 
            Goddess Saraswati". He was displaying his oratory skills and singing talent not only in the school but also in the 
            outside world, like All India Radio, which broadcasted his programmes on various speeches and singing his age of 15. 
            Having been adorned by Number of distinctions in the school-life, Shree Vagishkumar completed his M.A. (in Child Psychology), 
            Having deep interest not-only in literature & Music, but also in subjects of "Ayurveda", "Nadi Pariksha" and "Naturopathy", 
            he was conferred upon the "Doctorate" in the field of "Naturopathy".
            </p>
            <h4>Literary works and Awards</h4>
            <p>   
            Having been inherited with very rich cultural heritage by his father who himself is an awe–inspiring personality and been 
            given true lessons of culture & discipline by his compassionate mother, Dr. Vagishkumar, right from the childhood, had 
            started the deep study of the Indian culture, philosophy and the global philosophy. He also learned various "Shastras", 
            "Vedas", literature, music, Sanskrit, ayurveda, astrology, and the global–culture and philosophy from highly qualified 
            preceptors. Dr. Vagishkumar, the writer of the book – "BHARATIYA SANSKRUTI – EK VIHANGAVLOKAN" (INDIA CULTURE – AN OVERVIEW): 
            The first book written by 20 years old Shree Vagishkumar which was published by Shree Vakpati Foundation. In this book an 
            exhaustive picture of India i.e. right from culture & civilization of ancient era of the modern times has been elaborated 
            in a lucid & novel way. This book won the hearts of lots of people, literators, scholors as the pattern adopted in the book 
            was quite different and like a "sea in the water–pot". Some Hindi Literary works:
            </p>
            <ol>
                <li>RAJBHASA NIRDESHIKA</li>
                <li>LOK SAHITYA MEIN MANVIYA VEDANAONKA ALAMBAN</li>
                <li>SAHITYA ANUSHILAN KE VIVIDH SANDARBH</li>
                <li>SUR, SHRUNGAR, SAURABH</li>
                <li>HINDI BHASHA AUR SAHITYA KA ITIHAAS</li>
                <li>PRACHIN SHIKSHA PADDHATI</li>
                <li>HARISHCHANDRA</li>
                <li>HINDI RAJBHASHA KA UDHBHAV AUR VIKAS</li>
                <li>HINDI BHASHA PARICHAY</li>
                <li>BHARITIYA SANSKRUTI PARICHEY</li>
                <li>VASTUSHASTRA SIDDHANT EVAM PRAYOG</li>
                <li>Naadi – Parikshan</li>
                <li>Ayurved-saar</li>
                <li>Hindi Bhasha ka Samanya Gyan</li>
            </ol>
            <h4>Awards</h4>
            <p style="color:rgb(95,8,8);font-weight:700">National Awards </p>
            <p>
            For rendering excellent service to the Indian culture and Society through the medium of literature, 
            Dr. Vagishkumar was awarded the prestigious "Shikhar Sanman" and the "Gold Medal" by Hindi Pracharini Sabha, 
            Gujarat in 1988 i.e. at the age of 23. He has also been conferred upon various prestigious awards at national 
            level also like – "SAHITYA VARIDHI", "HARIT RISHI AWARD", "VIDHYA VACHASPATI", "VRAJ SAHITYA RATNAKAR", 
            "SAHITYA MAHOPADHYAY" and many many more. International Awards and Distinctions:<br>
            He has been awarded the degree of Ph. D. (Literature) by the "International University of Contemporary Studies 
            – Washington DC, USA." for his research paper as well as his distinguished services to the literature.
            </p>
            <ol>
                <li>INTERNATIONAL MAN OF MILLENIUM</li>
                <li>CERTIFICATE OF MERIT – 1998 for Distinguished Services</li>
                <li>OUTSTANDING PEOPLE OF TWENTIETH CENTURY</li>
            </ol>
            <h4>Activities</h4>
            <p style="color:rgb(95,8,8);font-weight:700">Sanskarbodh - An Extensive Movement</p>
            <p>
            Dr. Vagishkumarji is the Promotor and President of this project. This programme, which runs in the form of an exam 
            being conducted in various schools is aimed at Creating awareness of Indian Culture and the seriousness of and 
            freedom from the bad habits through a specially designed book written in a very interesting and touching language. 
            Every year the exam is conducted in various schools of Gujarat, which is planned to be made country wide in near future. 
            This project is an ambitious plan of Dr. Vagishkumarji, as it is his very clear perception that "Todays child and youth, 
            free from bad habits and well equipped by rich Indian Culture and Values, is tommorrows citizen of the greatest and 
            strongest and fully Self Reliant India, who will stand as pillar of the country committed to patriotism and real culture"
            </p>
        </div>
    </div>
    <!-- ---------------------------------------end information--------------------------------------------- -->
    
    </body>
</html>