
<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'dbconnect.php';
    $email = $_POST['email'];
    $password = $_POST['password']; 
    
     
//     $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "SELECT* FROM `userinfo`WHERE Email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num==1){
        session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
        header("location: http://localhost/project1/login-main.php");
    }
    else{
        $showError = "Invalid Credentials";
    }
}

// for password hashing

//     if ($num == 1){
//             if (password_verify($password, $row['password'])){ 
//                 session_start();
//                 $_SESSION['loggedin'] = true;
//                 $_SESSION['email'] = $email;
//                 header("location: http://localhost/project1/main.php");
//                 exit;
//             } 
//             else{
//                 $showError = "You don't have email*";
//             }
//         }
        
//     } 
//     else{
//         $showError = "Invalid Credentials";
//     }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
         
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="style/bootstrap.min.css">
        <link rel="stylesheet" href="style/style.css">
</head>
<body>
<section id="banner">
        <div class="container">
                <picture >
                        <img src="avdegic5l__1_-removebg-preview.png"  alt="">
                </picture>
                <div class="col-lg-4 offset-4">
                        <div class="register_item1">
                                <div class="register_text text-center">
                                        <h3>LOGIN</h3>
                                        
                                </div>
                                <div class="register_login_form">
                                        <form action="#" method="post">  
                                                <div class="mb-3">
                                                  <label for="exampleInputEmail1" class="form-label">Enter Your Email or phone</label>
                                                  <input type="email text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                  <span style="color:red;"><?php echo $showError?></span>
                                                </div>

                                                <div class="mb-3">
                                                        <label for="exampleInputpassword" class="form-label">Password</label>
                                                        <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                                
                                                <button type="submit" class="btn">Login</button>

                                        </form>

                                              <div class="text_teg">
                                                        <p>By continuing, you agree to Amazon's <span><a href="#">Conditions of Use </a><p>and <span><a href="#"> Privacy Notice.</a></span></p></span></p>
                                                        
                                                        <div class="need">
                                                                <a href="#">need help ?</a>
                                                        </div>

                                                        <div class="lne">
                                                        </div>

                                                        <div class="low_text">
                                                                <p>Buying for work?</p>
                                                        <a href="#">Shop on Amazon Business</a>
                                                        </div>

                                                </div> 
                                        
                                        
                                </div>
                        </div>
                        
                </div>
                <div class="end_text">
                        <p>New to Amazon?</p>
                </div>
                <div class=" mb_20">
                        <button input type="email text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> <a href="http://localhost/project1/register/register.php">Register Now</a> </button>
                </div>
        </div>
</section>  







<script src="js/script.js"></script>
</body>
</html>