<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <title>Video player</title>
        <link rel="stylesheet" href="playvideo.css">
        <script>
            // 2. This code loads the IFrame Player API code asynchronously.
            var tag = document.createElement('script');
          
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
          
            // 3. This function creates an <iframe> (and YouTube player)
            //    after the API code downloads.
            var player;
            function onYouTubeIframeAPIReady() {
              player = new YT.Player('player', {
                width: '100%',
                videoId: '4Z2Wvtvh6cA',
                playerVars: {'autoplay': 1, 'playsinline': 1 },
                events: {
                  'onReady': onPlayerReady
                }
              });
            }
          
            // 4. The API will call this function when the video player is ready.
            function onPlayerReady(event) {
            //    event.target.mute();
              event.target.playVideo();
            }
        </script>
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

        <div class="container play-container">
            <div class="row">
                <div class="play-video">
                    <div class="responsive">
                        <div id="player">
                            <iframe src="https://www.youtube.com/embed/4Z2Wvtvh6cA?autoplay=1" title="YouTube video player" 
                            frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
                        </div>
                    </div>
                    <h3>Inauguration speech by nimishaben patel || anand(19) and vvnag(13) birthday celebration</h3>
                    <p>30 views | 1 year ago</p>
                </div>
                <div class="right-slidebar">
                    <div class="title">
                        <h3>More Videos</h3>
                    </div>
                    <!-- 13 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo13.php"><img src="thumbnails/thumbnail-13.png"></a>
                        <div class="vid-info">
                            <a href="playvideo13.php">Dhyana gohel dance on achyutam keshavam song || anand...</a>
                            <small>104 views | 1 year ago</small>
                        </div>
                    </div>

                    <!-- 14 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo14.php"><img src="thumbnails/thumbnail-14.png"></a>
                        <div class="vid-info">
                            <a href="playvideo14.php">Pathshala's girls dancing on kanha song || anand...</a>
                            <small>131 views | 1 year ago</small>
                        </div>
                    </div>

                    <!-- 15 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo15.php"><img src="thumbnails/thumbnail-15.png"></a>
                        <div class="vid-info">
                            <a href="playvideo15.php">Vhala giriraj bhajan sing by dhvani shah || anand...</a>
                            <small>49 views | 1 year ago</small>
                        </div>
                    </div>

                    <!-- 16 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo16.php"><img src="thumbnails/thumbnail-16.png"></a>
                        <div class="vid-info">
                            <a href="playvideo16.php">Story telling by het raiya || anand(19) vvnagar...</a>
                            <small>42 views | 1 year ago</small>
                        </div>
                    </div>

                    <!-- 17 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo17.php"><img src="thumbnails/thumbnail-17.png"></a>
                        <div class="vid-info">
                            <a href="playvideo17.php">Krishna he song coverd by hetvi raiya || anand(19)...</a>
                            <small>100 views | 1 year ago</small>
                        </div>
                    </div>

                    <!-- 12 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok12.php"><img src="kirtan/thumbnail-12.png"></a>
                        <div class="vid-info">
                            <a href="playvideok12.php">SHRINATHJI NI ZANKHI PART-11 | SHRINATHJI SATSANG | K...</a>
                            <small>311K views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 13 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok13.php"><img src="kirtan/thumbnail-13.png"></a>
                        <div class="vid-info">
                            <a href="playvideok13.php">SHRINATHJI NI ZANKHI PART-12 | श्री नाथजी सतसंग पार्ट १२</a>
                            <small>855K views | 3 years ago</small>
                        </div>
                    </div>

                    <!-- 14 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok14.php"><img src="kirtan/thumbnail-14.png"></a>
                        <div class="vid-info">
                            <a href="playvideok14.php">SHRINATHJI NI ZANKHI - 13 | મુક્તિ મળે કે ન મળે સેવા કરવી | सतसंग...</a>
                            <small>300K views | 3 years ago</small>
                        </div>
                    </div>

                    <!-- 15 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok15.php"><img src="kirtan/thumbnail-15.png"></a>
                        <div class="vid-info">
                            <a href="playvideok15.php">8 SHAMA NA DARSHAN | SHRINATHJI NI ZANKHI...</a>
                            <small>1.6M views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 16 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok16.php"><img src="kirtan/thumbnail-16.jpg"></a>
                        <div class="vid-info">
                            <a href="playvideok16.php">Shrinathji Satsang (Part 1) | શ્રીનાથજી સત્સંગ | Shrinathji...</a>
                            <small>4.2M views | 6 years ago</small>
                        </div>
                    </div>

                    <!-- 17 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok17.php"><img src="kirtan/thumbnail-17.jpg"></a>
                        <div class="vid-info">
                            <a href="playvideok17.php">શ્રીનાથજી સત્સંગ 2 | Shrinathji Satsang Part 2 | Shrinathji...</a>
                            <small>267K views | 6 years ago</small>
                        </div>
                    </div>
                    <!-- 6 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo6.php"><img src="thumbnails/thumbnail-6.png"></a>
                        <div class="vid-info">
                            <a href="playvideo6.php">RAAS BY ANAND AND VV NAGAR PATHSHALA'S STUDENT ON...</a>
                            <small>778 views | 5 months ago</small>
                        </div>
                    </div>

                    <!-- 7 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo7.php"><img src="thumbnails/thumbnail-7.png"></a>
                        <div class="vid-info">
                            <a href="playvideo7.php">Speech by nitaben shah || Anand pathshala(19) and...</a>
                            <small>191 views | 1 year ago</small>
                        </div>
                    </div>

                    <!-- 8 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo8.php"><img src="thumbnails/thumbnail-8.png"></a>
                        <div class="vid-info">
                            <a href="playvideo8.php">Mangalacharan by pathshala's children mother...</a>
                            <small>159 views | 1 year ago</small>
                        </div>
                    </div>

                    <!-- 9 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo9.php"><img src="thumbnails/thumbnail-9.png"></a>
                        <div class="vid-info">
                            <a href="playvideo9.php">Sarvotam strot by neel patel || Anand pathshala(19)...</a>
                            <small>60 views | 1 year ago</small>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>