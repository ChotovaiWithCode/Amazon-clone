

<?php
   // validation

   $usernameErr=$emailErr=$passwordErr=$rpasswordErr="";
   $username=$email=$password=$rpassword="";


if($_SERVER["REQUEST_METHOD"]=="POST"){
        include 'dbconnect.php';
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $rpassword=$_POST['rpassword'];

     
     

        //cheak username exsist
        $existSqlN="SELECT* FROM `userinfo`WHERE Name='$username'";
        $existSqlE="SELECT* FROM `userinfo`WHERE Email='$email'";
        $existSqlP="SELECT* FROM `userinfo`WHERE Password='$password'";
        $resultN=mysqli_query($conn,$existSqlN);
        $resultE=mysqli_query($conn,$existSqlE);
        $resultP=mysqli_query($conn,$existSqlP);
        $numberExistrowsN=mysqli_num_rows($resultN);
        $numberExistrowsE=mysqli_num_rows($resultE);
        if($numberExistrowsN>0){
                $usernameErr='username already exist*';
                if($username==""){
                        $usernameErr='username is requird*';
                }
               
        }
       else if($numberExistrowsE>0){
                $emailErr="Email already exist*";
                if($email==""){
                        $emailErr='Email is requird*';
                }
              
              
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format*";
              }
        else if($resultP==""){
                $passwordErr="Password is requird*";
               }
              
        else{
               if($password==$rpassword){
                $hash=password_hash($password,PASSWORD_DEFAULT);
                $sql="INSERT INTO `userinfo` ( `Name`, `Email`, `Password`, `Rpassword`, `Date`) VALUES ('$username', '$email', '$password', '$rpassword', current_timestamp())";
                $result=mysqli_query($conn,$sql);
                if($result){
                        header("location: http://localhost/project1/login-main.php");
                }
               } 
               
               else{
                $passwordErr='password do not match*';
               }

        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="style/bootstrap.min.css">
        <link rel="stylesheet" href="style/style.css">
</head>
<body>
<section id="banner">
        <div class="container">
                <picture>
                        <img src="avdegic5l__1_-removebg-preview.png" alt="">
                </picture>
                <div class="col-lg-4 offset-4">
                        <div class="register_item1">
                                <div class="register_text text-center">
                                        <h3>Register Now</h3>
                                        
                                </div>
                                <div class="register_login_form">
                                        <form action="#" method="post">  
                                                <div class="mb-3">
                                                  <label for="exampleInputName" class="form-label">Enter Your Name</label>
                                                  <input type="text" name="username" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                                                  <span style="color:red;"><?php echo $usernameErr?> </span>
                                                </div>
                                                <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Enter Your Email or phone</label>
                                                        <input type="email text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        <span style="color:red;"><?php echo $emailErr?></span>
                                                </div>
                                                <div class="mb-3">
                                                        <label for="exampleInputpassword" class="form-label">Password</label>
                                                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        <span style="color:red;"><?php echo $passwordErr?></span>
                                                      </div>
                                                      <div class="mb-3">
                                                        <label for="exampleInputpassword" class="form-label">Re Enter-Password</label>
                                                        <input type="password" name="rpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        <span  style="color:red;"><?php echo $passwordErr?></span>
                                                      </div>
                                                
                                                <button type="submit" class="btn">Submit</button>

                                        </form>

                                                <div class="text_teg1">
                                                        <p>By creating an account, you agree to Amazon's</p>
                                                        <span><a href="#">Conditions of Use</a>and <a href="#"> Privacy Notice.</a></span>
                                                        
                                                        <div class="need">
                                                                <a href="#">need help ?</a>
                                                        </div> 

                                                        <div class="lne">
                                                        </div>

                                                        <div class="low_text">
                                                                <p>Buying for work?</p>
                                                        <a href="#">Create a free business account</a>
                                                        </div>
                                                        <div class="sine">
                                                                <p>Already have an account?</p>
                                                                <a href="http://localhost/project1/register/index%20(1).php"> Sign in</a>
                                                        </div>
                                                </div>  
                                        
                                </div>
                        </div>
                </div>
        </div>
</section>
</body>
</html>
