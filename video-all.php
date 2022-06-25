<?php
    session_start();
?>
<!DOCTYPE html>
<html>
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
            <li><a class="active" href="video-all.php">All</a></li>
            <li><a href="video-kirtan.php">KIRTANS</a></li>
            <li><a href="video-event.php">EVENTS</a></li>
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
                <h4>All Videos</h4>
            </div>
            <!-- -------------------------------------------video container----------------------------------------------- -->
            <div id="myList" class="list-container">
                <div class="vid-list">
                    <a href="playvideo1.php"><img src="thumbnails/thumbnail-1.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo1.php">"પ્રભુ કરે સો ભલી કરે" Performed By Anand Path...</a><br>
                        <small>79 views | 5 months ago</small>
                    </div>
                </div>
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
                    <a href="playvideo5.php"><img src="thumbnails/thumbnail-5.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo5.php">Aashray Pad By Delisha Modi | Anand(19) And Vvnagar(13)...</a><br>
                        <small>74 views | 1 year ago</small>
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
                    <a href="playvideo7.php"><img src="thumbnails/thumbnail-7.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo7.php">Speech By Nitaben Shah || Anand Pathshala(19) and VVNagar...</a><br>
                        <small>191 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo8.php"><img src="thumbnails/thumbnail-8.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo8.php">Mangalacharan by pathshala's children mother || janmanstmi...</a><br>
                        <small>159 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo9.php"><img src="thumbnails/thumbnail-9.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo9.php">sarvotam strot by neel patel || Anand pathshala(19) and vvnagar...</a><br>
                        <small>60 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo10.php"><img src="thumbnails/thumbnail-10.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo10.php">story telling by dhvij || anand(19) and vvnag(13) birthday...</a><br>
                        <small>17 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo11.php"><img src="thumbnails/thumbnail-11.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo11.php">Inauguration speech by nimishaben patel || anand(19) and vvnag...</a><br>
                        <small>30 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo12.php"><img src="thumbnails/thumbnail-12.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo12.php">Pathshala's teacher nimishaben sing kirtan || anand(19) and vvnag...</a><br>
                        <small>47 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo13.php"><img src="thumbnails/thumbnail-13.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo13.php">Dhyana gohel dance on achyutam keshavam song || anand...</a><br>
                        <small>104 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo14.php"><img src="thumbnails/thumbnail-14.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo14.php">Pathshala's girls dancing on kanha song || anand(19)...</a><br>
                        <small>131 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo15.php"><img src="thumbnails/thumbnail-15.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo15.php">Vhala giriraj bhajan sing by dhvani shah || anand(19)...</a><br>
                        <small>49 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo16.php"><img src="thumbnails/thumbnail-16.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo16.php">Story telling by het raiya || anand(19) vvnagar...</a><br>
                        <small>42 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo17.php"><img src="thumbnails/thumbnail-17.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo17.php">Krishna he song coverd by hetvi raiya || anand(19)...</a><br>
                        <small>100 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo18.php"><img src="thumbnails/thumbnail-18.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo18.php">Madhurashtakam by niyati patel || anand(19) and vvnagar...</a><br>
                        <small>216 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideo19.php"><img src="thumbnails/thumbnail-19.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideo19.php">Jamastmi bhajan by niyati || anand(19) and vvnagar...</a><br>
                        <small>146 views | 1 year ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok1.php"><img src="kirtan/thumbnail-1.jpg" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok1.php">મારા ઘટ માં બિરાજતા | He Mara Ghat Ma Birajta Shrinathji...</a><br>
                        <small>21M views | 4 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok2.php"><img src="kirtan/thumbnail-2.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok2.php">Shrinathji Ni Zakhi 1 - Shrinathji Na Bhajan</a><br>
                        <small>2.8M views | 8 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok3.php"><img src="kirtan/thumbnail-3.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok3.php">Shrinathji Ni Zakhi 2 - Shrinathji Na Bhajan</a><br>
                        <small>452k views | 5 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok4.php"><img src="kirtan/thumbnail-4.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok4.php"></a>Shrinathji Ni Zakhi 3 - Shrinathji Na Bhajan<br>
                        <small>141k views | 5 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok5.php"><img src="kirtan/thumbnail-5.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok5.php">SHRINATHJI NI ZANKHI PART-4 | SHRINATHJI SATSANG...</a><br>
                        <small>3.9M views | 4 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok6.php"><img src="kirtan/thumbnail-6.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok6.php">SHRINATHJI NI ZANKHI PART-5 | SHRINATHJI SATSANG...</a><br>
                        <small>1.5M views | 4 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok7.php"><img src="kirtan/thumbnail-7.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok7.php">SHRINATHJI NI ZANKHI PART - 6 | TAN MAN DHAN SHRIJI NA...</a><br>
                        <small>3.4M views | 4 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok8.php"><img src="kirtan/thumbnail-8.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok8.php">SHRINATHJI NI ZANKHI PART-7 | NEW SHRINATHJI SATSUNG...</a><br>
                        <small>233K views | 4 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok9.php"><img src="kirtan/thumbnail-9.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok9.php">SHRINATHJI NI ZANKHI PART-8 | श्रींनाथज़ी की झाखी | BEST...</a><br>
                        <small>618K views | 4 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok10.php"><img src="kirtan/thumbnail-10.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok10.php">SHRINATHJI NI ZANKHI PART-9 | श्रींनाथज़ी की झाखी | BEST...</a><br>
                        <small>2.2M views | 4 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok11.php"><img src="kirtan/thumbnail-11.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok11.php">SHRINATHJI NI ZANKHI PART-10 | SHRINATHJI SATSANG...</a><br>
                        <small>308K views | 4 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok12.php"><img src="kirtan/thumbnail-12.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok12.php">SHRINATHJI NI ZANKHI PART-11 | SHRINATHJI SATSANG...</a><br>
                        <small>311K views | 4 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok13.php"><img src="kirtan/thumbnail-13.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok13.php">SHRINATHJI NI ZANKHI PART-12 | श्री नाथजी सतसंग पार्ट १२</a><br>
                        <small>855K views | 3 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok14.php"><img src="kirtan/thumbnail-14.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok14.php">SHRINATHJI NI ZANKHI - 13 | મુક્તિ મળે કે ન મળે સેવા કરવી...</a><br>
                        <small>300K views | 3 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok15.php"><img src="kirtan/thumbnail-15.png" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok15.php">8 SHAMA NA DARSHAN | SHRINATHJI NI ZANKHI | MANGLA SE...</a><br>
                        <small>1.6M views | 4 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok16.php"><img src="kirtan/thumbnail-16.jpg" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok16.php">Shrinathji Satsang (Part 1) | શ્રીનાથજી સત્સંગ | Shrinathji...</a><br>
                        <small>4.2M views | 6 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok17.php"><img src="kirtan/thumbnail-17.jpg" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok17.php">શ્રીનાથજી સત્સંગ 2 | Shrinathji Satsang Part 2 | Shrinathji...</a><br>
                        <small>267K views | 6 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok18.php"><img src="kirtan/thumbnail-18.jpg" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok18.php">શ્રીનાથજી સત્સંગ-૩ | Shrinathji Satsang Part 3 | Shrinathji...</a><br>
                        <small>1.7M views | 6 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok19.php"><img src="kirtan/thumbnail-19.jpg" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok19.php">અમી ભરેલી નજર્યું રાખો | Ami Bhareli Najaryu Rakho | Hemant...</a><br>
                        <small>6M views | 4 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok20.php"><img src="kirtan/thumbnail-20.jpg" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok20.php">ચાલો રે જઈએ સત્સંગ માં | Chalo Re Jaiye | Shree Krushna...</a><br>
                        <small>2.4M views | 2 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok21.php"><img src="kirtan/thumbnail-21.jpg" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok21.php">મથુરા માં શ્રીનાથજી | Mathura Ma Shreenathji | Hemant Chauhan...</a><br>
                        <small>12K views | 7 months ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok22.php"><img src="kirtan/thumbnail-22.jpg" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok22.php">ધન્ય એકાદશી | Dhan Ekadashi Kari Deto Vrajsukh Pamiye...</a><br>
                        <small>3.6M views | 4 years ago</small>
                    </div>
                </div>
                <div class="vid-list">
                    <a href="playvideok23.php"><img src="kirtan/thumbnail-23.jpg" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href="playvideok23.php">તન મન ધન શ્રીજીના ચરણોમાં | Tan Man Dhan Shriji Na Charno Ma...</a><br>
                        <small>2.5M views | 7 years ago</small>
                    </div>
                </div>
            </div>

            <!-- -------------------------------------------end video container----------------------------------------------- -->
        </div>
    </body>
</html>