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
                videoId: 'x6Cu2PXZ-7o',
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
                            <iframe src="https://www.youtube.com/embed/x6Cu2PXZ-7o?autoplay=1" title="YouTube video player" 
                            frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
                        </div>
                    </div>
                    <h3>SHRINATHJI NI ZANKHI PART-5 | SHRINATHJI SATSANG | SHRINATHJI BHAJAN</h3>
                    <p>1.5M views | 4 years ago</p>
                </div>
                <div class="right-slidebar">
                    <div class="title">
                        <h3>More Videos</h3>
                    </div>
                    <!-- 7 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok7.php"><img src="kirtan/thumbnail-7.png"></a>
                        <div class="vid-info">
                            <a href="playvideok7.php">SHRINATHJI NI ZAKHI PART - 6 | TAN MAN DHAN SHRIJI NA CHA...</a>
                            <small>3.4M views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 8 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok8.php"><img src="kirtan/thumbnail-8.png"></a>
                        <div class="vid-info">
                            <a href="playvideok8.php">SHRINATHJI NI ZAKHI PART - 7 | NEW SHRINATHJI SATSUNG GUJ...</a>
                            <small>233K views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 9 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok9.php"><img src="kirtan/thumbnail-9.png"></a>
                        <div class="vid-info">
                            <a href="playvideok9.php">SHRINATHJI NI ZAKHI PART-8 | श्रींनाथज़ी की झाखी | BEST BHAJAN</a>
                            <small>618K views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 10 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok10.php"><img src="kirtan/thumbnail-10.png"></a>
                        <div class="vid-info">
                            <a href="playvideok10.php">SHRINATHJI NI ZAKHI PART-9 | श्रींनाथज़ी की झाखी | BEST BHA...</a>
                            <small>2.2M views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 11 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok11.php"><img src="kirtan/thumbnail-11.png"></a>
                        <div class="vid-info">
                            <a href="playvideok11.php">SHRINATHJI NI ZANKHI PART-10 | SHRINATHJI SATSANG | 8...</a>
                            <small>308K views | 4 years ago</small>
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

                    <!-- 10 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo10.php"><img src="thumbnails/thumbnail-10.png"></a>
                        <div class="vid-info">
                            <a href="playvideo10.php">Story telling by dhvij || anand(19) and vvnag(13)...</a>
                            <small>17 views | 1 year ago</small>
                        </div>
                    </div>

                    <!-- 11 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo11.php"><img src="thumbnails/thumbnail-11.png"></a>
                        <div class="vid-info">
                            <a href="playvideo11.php">Inauguration speech by nimishaben patel || anand...</a>
                            <small>30 views | 1 year ago</small>
                        </div>
                    </div>
                    <!-- 19 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok19.php"><img src="kirtan/thumbnail-19.jpg"></a>
                        <div class="vid-info">
                            <a href="playvideok19.php">અમી ભરેલી નજર્યું રાખો | Ami Bhareli Najaryu Rakho | Hemant...</a>
                            <small>6M views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 20 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok20.php"><img src="kirtan/thumbnail-20.jpg"></a>
                        <div class="vid-info">
                            <a href="playvideok20.php">ચાલો રે જઈએ સત્સંગ માં | Chalo Re Jaiye | Shree Krushna Bhajan...</a>
                            <small>2.4M views | 2 years ago</small>
                        </div>
                    </div>

                    <!-- 21 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok21.php"><img src="kirtan/thumbnail-21.jpg"></a>
                        <div class="vid-info">
                            <a href="playvideok21.php">મથુરા માં શ્રીનાથજી | Mathura Ma Shreenathji | Hemant...</a>
                            <small>12K views | 7 months ago</small>
                        </div>
                    </div>

                    <!-- 22 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok22.php"><img src="kirtan/thumbnail-22.jpg"></a>
                        <div class="vid-info">
                            <a href="playvideok22.php">ધન્ય એકાદશી | Dhan Ekadashi Kari Deto Vrajsukh Pamiye...</a>
                            <small>3.6M views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 23 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok23.php"><img src="kirtan/thumbnail-23.jpg"></a>
                        <div class="vid-info">
                            <a href="playvideok23.php">તન મન ધન શ્રીજીના ચરણોમાં | Tan Man Dhan Shriji Na Charno...</a>
                            <small>2.5M views | 7 years ago</small>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>