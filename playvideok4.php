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
                videoId: 'tBKFH_4V8yQ',
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
                            <iframe src="https://www.youtube.com/embed/tBKFH_4V8yQ?autoplay=1" title="YouTube video player" 
                            frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
                        </div>
                    </div>
                    <h3>Shrinathji Ni Zakhi 3 - Shrinathji Na Bhajan</h3>
                    <p>141k views | 5 years ago</p>
                </div>
                <div class="right-slidebar">
                    <div class="title">
                        <h3>More Videos</h3>
                    </div>
                    <div class="side-video-list">
                        <a class="small-thumbnail" href=""><img src="thumbnails/thumbnail-1.png"></a>
                        <div class="vid-info">
                            <a href="">"Prabhu Kare So Bhali Kare" Performed By Anand Path...</a>
                            <small>100 views | 1 month</small>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a class="small-thumbnail" href=""><img src="thumbnails/thumbnail-2.png"></a>
                        <div class="vid-info">
                            <a href="">"Prabhu Kare So Bhali Kare" Performed By Anand Path...</a>
                            <small>100 views | 1 month</small>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a class="small-thumbnail" href=""><img src="thumbnails/thumbnail-3.png"></a>
                        <div class="vid-info">
                            <a href="">"Prabhu Kare So Bhali Kare" Performed By Anand Path...</a>
                            <small>100 views | 1 month</small>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a class="small-thumbnail" href=""><img src="thumbnails/thumbnail-4.png"></a>
                        <div class="vid-info">
                            <a href="">"Prabhu Kare So Bhali Kare" Performed By Anand Path...</a>
                            <small>100 views | 1 month</small>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a class="small-thumbnail" href=""><img src="thumbnails/thumbnail-5.png"></a>
                        <div class="vid-info">
                            <a href="">"Prabhu Kare So Bhali Kare" Performed By Anand Path...</a>
                            <small>100 views | 1 month</small>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a class="small-thumbnail" href=""><img src="thumbnails/thumbnail-6.png"></a>
                        <div class="vid-info">
                            <a href="">"Prabhu Kare So Bhali Kare" Performed By Anand Path...</a>
                            <small>100 views | 1 month</small>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a class="small-thumbnail" href=""><img src="thumbnails/thumbnail-7.png"></a>
                        <div class="vid-info">
                            <a href="">"Prabhu Kare So Bhali Kare" Performed By Anand Path...</a>
                            <small>100 views | 1 month</small>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a class="small-thumbnail" href=""><img src="thumbnails/thumbnail-8.png"></a>
                        <div class="vid-info">
                            <a href="">"Prabhu Kare So Bhali Kare" Performed By Anand Path...</a>
                            <small>100 views | 1 month</small>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a class="small-thumbnail" href=""><img src="thumbnails/thumbnail-9.png"></a>
                        <div class="vid-info">
                            <a href="">"Prabhu Kare So Bhali Kare" Performed By Anand Path...</a>
                            <small>100 views | 1 month</small>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a class="small-thumbnail" href=""><img src="thumbnails/thumbnail-10.png"></a>
                        <div class="vid-info">
                            <a href="">"Prabhu Kare So Bhali Kare" Performed By Anand Path...</a>
                            <small>100 views | 1 month</small>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a class="small-thumbnail" href=""><img src="thumbnails/thumbnail-11.png"></a>
                        <div class="vid-info">
                            <a href="">"Prabhu Kare So Bhali Kare" Performed By Anand Path...</a>
                            <small>100 views | 1 month</small>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a class="small-thumbnail" href=""><img src="thumbnails/thumbnail-12.png"></a>
                        <div class="vid-info">
                            <a href="">"Prabhu Kare So Bhali Kare" Performed By Anand Path...</a>
                            <small>100 views | 1 month</small>
                        </div>
                    </div>
                    <div class="side-video-list">
                        <a class="small-thumbnail" href=""><img src="thumbnails/thumbnail-13.png"></a>
                        <div class="vid-info">
                            <a href="">"Prabhu Kare So Bhali Kare" Performed By Anand Path...</a>
                            <small>100 views | 1 month</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>