<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale:1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="image.css">
        <title>Images</title>
    </head>
    <body onload="validDate()">
        <!----------------------------------------- navbar ------------------------------ -->
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
        <!-----------------------------------end navbar ------------------------------ -->

        <!-------------------------------- vertical nav --------------------------------->

        <ul class="vertical-ul">
            <li><a href="image-dailydarshan.php" class="active">Daily Darshan</a></li>
            <li><a href="image-event.php">Events</a></li>
        </ul>

        <!--------------------------------end vertical nav --------------------------------->

        <!---------------------------------- datepicker ---------------------------------->
        <div class="dateselect">
          <label for="date">Select Date : </label>
          <input id="myBtn" type="date" name="date" onchange="myFunction()">
          <script>
                const element = document.getElementById("myBtn");
                function myFunction() {
                    // location.href=element.value+".html";
                    document.getElementById("myiframe").src=element.value+".html";
                }
                function getInputDateFormat(date) {
                    return date.toISOString().split('T')[0];
                }

                function validDate() {
                    var maxDate = new Date();
                    maxDate.setDate(maxDate.getDate());
                    document.getElementsByName("date")[0].setAttribute('max', getInputDateFormat(maxDate));
                }
            </script>
        </div>
        <!------------------------------end datepicker ---------------------------------->
        <div class="set-margin">
          <iframe id="myiframe" src="2022-04-05.html"></iframe>
        </div>
      </body>
</html>