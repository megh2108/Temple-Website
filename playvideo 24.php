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
        <title>Video player</title>
        <link rel="stylesheet" href="playvideo1.css">
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
                videoId: 'W0LRhh1JLWM',
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
                        <a class="nav-link" aria-current="page" href="index.html">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">IMAGES</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="video-all.html">VIDEOS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about-shrinathji.html">ABOUT</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
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

            <div class="row">
                <div class="play-video1">
                    <div class="responsive">
                        <div id="player">
                            <iframe src="https://www.youtube.com/embed/W0LRhh1JLWM?autoplay=1" title="YouTube video player" 
                            frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
                        </div>
                    </div>
                    <h3>તન મન ધન શ્રીજીના ચરણોમાં | Tan Man Dhan Shriji Na Charno Ma | Shrinathji Bhajan | Sachin Limaye</h3>
                    <p>2.5M views | 7 years ago</p>
                </div>
                <div class="right-slidebar">
                    <div class="title">
                        <h3>More Videos</h3>
                    </div>
                    <!-- 15 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideok15.html"><img src="kirtan/thumbnail-15.png"></a>
    <div class="vid-info">
        <a href="playvideok15.html">8 SHAMA NA DARSHAN | SHRINATHJI NI ZANKHI...</a>
        <small>1.6M views | 4 years ago</small>
    </div>
</div>

<!-- 16 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideok16.html"><img src="kirtan/thumbnail-16.jpg"></a>
    <div class="vid-info">
        <a href="playvideok16.html">Shrinathji Satsang (Part 1) | શ્રીનાથજી સત્સંગ | Shrinathji...</a>
        <small>4.2M views | 6 years ago</small>
    </div>
</div>

<!-- 17 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideok17.html"><img src="kirtan/thumbnail-17.jpg"></a>
    <div class="vid-info">
        <a href="playvideok17.html">શ્રીનાથજી સત્સંગ 2 | Shrinathji Satsang Part 2 | Shrinathji...</a>
        <small>267K views | 6 years ago</small>
    </div>
</div>

<!-- 18 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideok18.html"><img src="kirtan/thumbnail-18.jpg"></a>
    <div class="vid-info">
        <a href="playvideok18.html">શ્રી કૃષ્ણ શરણમ મમઃ | Shree Krishna Sharnam Mamah...</a>
        <small>4.5M views | 4 years ago</small>
    </div>
</div>

<!-- 19 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideok19.html"><img src="kirtan/thumbnail-19.jpg"></a>
    <div class="vid-info">
        <a href="playvideok19.html">અમી ભરેલી નજર્યું રાખો | Ami Bhareli Najaryu Rakho | Hemant...</a>
        <small>6M views | 4 years ago</small>
    </div>
</div>

<!-- 20 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideok20.html"><img src="kirtan/thumbnail-20.jpg"></a>
    <div class="vid-info">
        <a href="playvideok20.html">ચાલો રે જઈએ સત્સંગ માં | Chalo Re Jaiye | Shree Krushna Bhajan...</a>
        <small>2.4M views | 2 years ago</small>
    </div>
</div>

<!-- 21 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideok21.html"><img src="kirtan/thumbnail-21.jpg"></a>
    <div class="vid-info">
        <a href="playvideok21.html">મથુરા માં શ્રીનાથજી | Mathura Ma Shreenathji | Hemant...</a>
        <small>12K views | 7 months ago</small>
    </div>
</div>
<!-- 1 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideo1.html"><img src="thumbnails/thumbnail-1.png"></a>
    <div class="vid-info">
        <a href="playvideo1.html">"પ્રભુ કરે સોં ભલી કરે"Performed by Anand Pathshala...</a>
        <small>79 views | 5 months ago</small>
    </div>
</div>

<!-- 2 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideo2.html"><img src="thumbnails/thumbnail-2.png"></a>
    <div class="vid-info">
        <a href="playvideo2.html">NANDMAHOTSAV CELEBRATIONS BY ANAND...</a>
        <small>621 views | 5 months ago</small>
    </div>
</div>

<!-- 3 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideo3.html"><img src="thumbnails/thumbnail-3.png"></a>
    <div class="vid-info">
        <a href="playvideo3.html">Online rangoli competition || Anand pathshala(19)...</a>
        <small>131 views | 1 year ago</small>
    </div>
</div>

<!-- 4 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideo4.html"><img src="thumbnails/thumbnail-4.png" style="border:2px solid black"></a>
    <div class="vid-info">
        <a href="playvideo4.html">Birthday celebration of 108 dr.shree vagishkumarji...</a>
        <small>65 views | 1 year ago</small>
    </div>
</div>

<!-- 5 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideo5.html"><img src="thumbnails/thumbnail-5.png"></a>
    <div class="vid-info">
        <a href="playvideo5.html">Aashray pad by delisha modi || anand(19) and vvnag...</a>
        <small>74 views | 1 year ago</small>
    </div>
</div>

<!-- 6 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideo6.html"><img src="thumbnails/thumbnail-6.png"></a>
    <div class="vid-info">
        <a href="playvideo6.html">RAAS BY ANAND AND VV NAGAR PATHSHALA'S STUDENT ON...</a>
        <small>778 views | 5 months ago</small>
    </div>
</div>

<!-- 7 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideo7.html"><img src="thumbnails/thumbnail-7.png"></a>
    <div class="vid-info">
        <a href="playvideo7.html">Speech by nitaben shah || Anand pathshala(19) and...</a>
        <small>191 views | 1 year ago</small>
    </div>
</div>

<!-- 8 -->
<div class="side-video-list">
    <a class="small-thumbnail" href="playvideo8.html"><img src="thumbnails/thumbnail-8.png"></a>
    <div class="vid-info">
        <a href="playvideo8.html">Mangalacharan by pathshala's children mother...</a>
        <small>159 views | 1 year ago</small>
    </div>
</div>
                </div>
            </div>
    </body>
</html>