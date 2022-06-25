<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <script>
        function newpage()
        {
            location.href="loginform.php";
        }
        function check()
        {
            const usernameValue=frm.username.value.trim();
            const contactValue=frm.contactno.value.trim();
            const emailValue=frm.email.value.trim();
            const passwordValue=frm.password.value.trim();
            const cpasswordValue=frm.cpassword.value.trim();    

            if(usernameValue=="")
            {
                setErrorFor(username,"Username cannot be blank.");
                frm.username.focus();
                return false;
            }
            else if(checkUsername(usernameValue))
            {
                setErrorFor(username,"Special characters are not aloud in username.");
                frm.username.focus();
                return false;
            }
            else
            {
                setSuccessFor(username);
            }

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

            if(contactValue=="")
            {
                setErrorFor(contactno,"Contact Number cannot be blank.");
                frm.contactno.focus();
                return false;
            }
            else if(!checkcontact(frm.contactno))
            {
                setErrorFor(contactno,"Contact Number must contain 10 digit.");
                frm.contactno.focus();
                return false;   
            }
            else
            {
                setSuccessFor(contactno);   
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

            if(cpasswordValue=="")
            {
                setErrorFor(cpassword,"Confirm password cannot be blank.");
                frm.cpassword.focus();
                return false;
            }
            else if(cpasswordValue!==passwordValue)
            {
                setErrorFor(cpassword,"Password not matched.");
                frm.cpassword.focus();
                return false;
            }
            else
            {
                setSuccessFor(cpassword);
            }
        }
        function setErrorFor(input,message)
        {
            const formControl=input.parentElement;
            const small=formControl.querySelector("small");
            small.innerText=message;
            if(input==password || input==cpassword)
                formControl.className="form-control errorpassword";
            else
                formControl.className="form-control error";
        }
        function setSuccessFor(input,message)
        {
            const formControl=input.parentElement;
            formControl.className="form-control";
        }
        function checkUsername(username)
        {
            return /\W/.test(username);
        }
        function checkEmail(email)
        {
            return /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/.test(email);
        }
        function checkcontact(contactno)
        {
            if(contactno.value.length==10)
                return true;
            return false;
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
            $username=mysqli_real_escape_string($con, $_POST["username"]);
            $email=mysqli_real_escape_string($con, $_POST["email"]);
            $contactno=mysqli_real_escape_string($con, $_POST["contactno"]);
            $password=mysqli_real_escape_string($con, $_POST["password"]);
            $cpassword=mysqli_real_escape_string($con, $_POST["cpassword"]);
            
            $pass=password_hash($password,PASSWORD_BCRYPT);
            $cpass=password_hash($cpassword,PASSWORD_BCRYPT);

            $emailquery="select * from registration where email = '$email' ";
            $query=mysqli_query($con,$emailquery);
            
            $emailcount=mysqli_num_rows($query);

            if($emailcount>0)
            {
                ?>
                    <script>
                        alert("Email alerady exists.");
                    </script>
                <?php
            }
            else
            {
                $contactquery="select * from registration where mobile = '$contactno' ";
                $cquery=mysqli_query($con,$contactquery);
                
                $contactcount=mysqli_num_rows($cquery);
                if($contactcount>0)
                {
                    ?>
                        <script>
                            alert("Contact Number alerady exists.");
                        </script>
                    <?php
                }
                else
                {
                    $insertquery="insert into registration(username, email, mobile, password, cpassword) 
                    values('$username','$email','$contactno','$pass','$cpass')";
                    
                    $iquery = mysqli_query($con,$insertquery);

                    ?>
                        <script>
                            location.replace("index.php");
                        </script>
                    <?php
                    
                    /*if($iquery)
                    {
                        ?>
                        <script>
                        alert("Inserted Successfull.");
                        </script>
                        <?php
                    }
                    else
                    {
                        ?>
                        <script>
                        alert("Insert Unsuccessfull.");
                        </script>
                        <?php
                    }*/
                }
            }
        }
    ?>
    <section id="banner">
        <div id="form-box">
            <div class="button-box">
                <div id="btn1"></div>
                <button type="button" class="buttons" onclick="newpage()">Login</button>
                <button type="button" class="buttons">Sign Up</button>
            </div>
            <div class="social">
                <div class="go"><i class="fab fa-google"></i>  Google</div>
                <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
            </div>
            <form class="form" id="form" name="frm" onsubmit="return check()" method="post" 
            action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                <div class="form-control">
                    <label for="username">Name</label>
                    <input type="text" name="username" id="username" placeholder="Name">
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error massege</small>
                </div>
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error massege</small>
                </div>
                <div class="form-control">
                    <label for="contactno">Contact Number</label>
                    <input type="tel" name="contactno" id="contactno" placeholder="Contact Number">
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error massege</small>
                </div>
                <div class="form-control">
                    <label for="password">Set Password</label>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error massege</small>
                </div>
                <div class="form-control">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Password">
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error massege</small>
                </div>
                <input class="submit-btn" id="login-btn" type="submit" name="submit" value="Sign Up">
            </form>
        </div>
    </section>
</body>
</html>
    