<?php
    session_start();
?>
<!DOCTYPE html>
<php>
    <head>
        <meta charset="UTF-*">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="video.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <title>Video Page</title>
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
        <!-- -------------------------------------------vertical navbar----------------------------------------- -->
        <ul class="vertical-ul">
            <li><a href="video-all.php">All</a></li>
            <li><a href="video-kirtan.php">KIRTANS</a></li>
            <li><a class="active" href="video-event.php">EVENTS</a></li>
        </ul>
        <!-- -------------------------------------------end vertical navbar----------------------------------------- -->

        <div class="set-margin">
        <div class="search">
            <input type="text" id="myinput" oninput="myFunction()" placeholder="Search" title="Type in a category">
        </div>
            <script>
                function myFunction() {
                    let filter=document.getElementById("myinput").value.toUpperCase();
                    
                    let myVideo=document.getElementById("myList");

                    let myLabel=myVideo.getElementsByClassName("vid-list");

                    for(let i=0;i<myLabel.length;i++)
                    {
                        let myTitle=myLabel[i].getElementsByTagName("a")[1];

                        if(myTitle)
                        {
                            let textValue = myTitle.textContent || myTitle.innerHTML;

                            if(textValue.toUpperCase().indexOf(filter)>-1)
                            {
                                myLabel[i].style.display="";
                                myLabel[i].style.width="304px";
                            }
                            else
                            {
                                myLabel[i].style.display="none";
                            }
                        }
                    }
                }
            </script>
            <div class="title">
                <h4>EVENTS</h4>
            </div>
            <!-- -------------------------------------------video container----------------------------------------------- -->
            <div id="myList" class="list-container">
                <div class="vid-list">
                    <a href="playvideo2.php"><img src="thumbnails/thumbnail-2.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo2.php">Nandmahotsav Celebration By Anand Pathshala...</a><br>
                        <small>621 views | 5 months ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo3.php"><img src="thumbnails/thumbnail-3.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo3.php">Online Rangoli Compitition | Anand Pathshala(19)...</a><br>
                        <small>131 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo4.php"><img src="thumbnails/thumbnail-4.png" class="thumbnail" style="border:2px solid black"></a>
                    <div class="vid-info">
                        <a href="playvideo4.php">Birthday Celebration Of 108 Dr.Shree Vagishkumarji...</a><br>
                        <small>65 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo6.php"><img src="thumbnails/thumbnail-6.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo6.php">Rass By Anand And VVNagar Pathshala's Student On The...</a><br>
                        <small>778 views | 5 months ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo8.php"><img src="thumbnails/thumbnail-8.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo8.php">Mangalacharan by pathshala's children mother || janmanstmi...</a><br>
                        <small>159 views | 1 year ago</small>
                    </div>
                </div>
            </div>
            <!-- -------------------------------------------end video container----------------------------------------------- -->
        </div>
    </body>
</html>