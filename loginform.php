<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>login form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <script>
        function newpage()
        {
            location.href="signupform.php";
        }
        function check()
        {
            const emailValue=frm.email.value.trim();
            const passwordValue=frm.password.value.trim();    

            if(emailValue=="")
            {
                setErrorFor(email,"Please enter email.");
                frm.email.focus();
                return false;
            }
            else if(!checkEmail(emailValue))
            {
                setErrorFor(email,"Email can not be valid.");
                frm.email.focus();
                return false;
            }
            else
            {
                setSuccessFor(email);   
            }

            if(passwordValue=="")
            {
                setErrorFor(password,"Password cannot be blank.");
                frm.password.focus();
                return false;
            }
            else if(!checkPassword(passwordValue))
            {
                setErrorFor(password,"Password must contain atleast one small letter.");
                frm.password.focus();
                return false;
            }
            else if(!checkPassword1(passwordValue))
            {
                setErrorFor(password,"Password must contain atleast one capital letter.");
                frm.password.focus();
                return false;
            }
            else if(!checkPassword2(passwordValue))
            {
                setErrorFor(password,"Password must contain atleast one spacial character.");
                frm.password.focus();
                return false;
            }
            else if(!checkPassword3(passwordValue))
            {
                setErrorFor(password,"Password must contain atleast two digit.");
                frm.password.focus();
                return false;
            }
            else if(!checkPassword4(frm.password))
            {
                setErrorFor(password,"Password must contain atleast 8 character.");
                frm.password.focus();
                return false;
            }
            else
            {
                setSuccessFor(password);
            }
        }
        function setErrorFor(input,message)
        {
            const formControl=input.parentElement;
            const small=formControl.querySelector("small");
            small.innerText=message;
            if(input==password)
                formControl.className="form-control errorpassword";
            else
                formControl.className="form-control error";
        }
        function setSuccessFor(input,message)
        {
            const formControl=input.parentElement;
            formControl.className="form-control";
        }
        function checkEmail(email)
        {
            return /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/.test(email);
        }
        function checkPassword(password)
        {
            return /[a-z]+/.test(password);
        }
        function checkPassword1(password)
        {
            return /[A-Z]+/.test(password);
        }
        function checkPassword2(password)
        {
            return /\W+/.test(password);
        }
        function checkPassword3(password)
        {
            return /[0-9]{2}/.test(password);
        }
        function checkPassword4(password)
        {
            if(password.value.length>=8)
                return true;
            return false;
        }
    </script>
</head>
<body>
    <?php
        include "connection.php";

        if(isset($_POST["submit"]))
        {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $email_search = "select * from registration where email = '$email' ";
            $query = mysqli_query($con,$email_search);

            $email_count = mysqli_num_rows($query);

            if($email_count)
            {
                $email_pass = mysqli_fetch_assoc($query);

                $db_pass =  $email_pass["password"];

                $_SESSION["username"] = $email_pass["username"];

                $pass_decode = password_verify($password,$db_pass);

                if($pass_decode)
                {
                    ?>
                        <script>
                            alert("Login successful.");
                            location.replace("index.php");
                        </script>
                    <?php
                }
                else
                {
                    ?>
                        <script>
                            alert("Password Incorrect.");
                        </script>
                    <?php
                }
            }
            else
            {
                ?>
                    <script>
                        alert("Invalid email.");
                    </script>
                <?php
            }
        }
    ?>
    <section id="banner">
        <div id="form-box" class="forms">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="buttons">Login</button>
                <button type="button" class="buttons" onclick="newpage()">Sign Up</button>
            </div>
            <div class="social">
                <div class="go"><i class="fab fa-google"></i>  Google</div>
                <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
            </div>
            <form class="form" id="form" name="frm" method="post" onsubmit="return check()"
             action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>">
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error massege</small>
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error massege</small>
                </div>
                <input class="submit-btn" id="login-btn" name="submit" type="submit" value="Login">
            </form>
        </div>
    </section>
</body>
</html>
    