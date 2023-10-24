<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        include("links.php");
    ?>
    <title>Lifesaver</title>
</head>
<body>


    
<div class="container-fluid "> 

    <div class="row">
          <?php
          include("header.php");
          ?>
    </div>
 
    <div class="row ">
        <?php
          include("menu2.php");
          ?>
    </div>

    <div class="row">
        <div class="col-sm">
            <div class="signup p-5">
                <p style="font-size:30px;font-weight:bold;text-align:center;margin-top:10px; line-height:35px; color:rgb(60, 60, 60);" class="text-uppercase"> Signup Once <br>Save lives Forever!</p>
                
                <form action="d_signup.php" method="POST">
                    <br><br>
                    <div class="container-sm">
                        <input  class="form-control" type="text" name="name" id="name" required placeholder="Full Name"><br>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email" required ><br>
                        <input  class="form-control" type="text" name="contact" id="contact" required placeholder="Contact"><br>
                        <input class="form-control" type="password" name="pass1" id="p1" placeholder="Password" required><br>
                        <input class="form-control" type="password" name="pass2" id="p2" placeholder="Confirm Password" required><br><br>
                        
                        <input type="submit" value="SIGN UP" class="btn btn-block" style="color:white;background-color:#A8C449;"><br>

                    </div>
                    
                            
                </form>

                <?php
                        include('connect.php');
                        if($_SERVER['REQUEST_METHOD']=="POST"){
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $contact=$_POST['contact'];
                            $pass1=$_POST['pass1'];
                            $pass2=$_POST['pass2'];
                            $pass3=md5($_POST['pass1']);
                            $vcode="ls".$email.time();

                            // $msg="Your account has been successfully created.Please click the link below verify: <br>
                            // http://www.bmcqta.com/verify.php?email=".$email."&verification_code=".$vcode."<br>".
                            // "Note: if your link is not clickable, paste the above URL into the search menu and enter.";
                            // $msg=wordwrap($msg,70);

                            // $header="From: verify@bmcqta.com";


                            if($pass1!= $pass2){
                                echo "<span style='color:red; text-align:center;'>Your passwords do not match please try again</span><br>";
                            }
                            elseif($pass1=$pass2){
                                // mail($email,"Bolan Medical College email verification",$msg, $header);
                                // SET FOREIGN_KEY_CHECKS=0;
                                $sql="INSERT INTO doctor_info (name,email,password,v_code,status,contact)
                                VALUES ('$name','$email','$pass3','$vcode','active','$contact')  ";
                                if(mysqli_query($conn,$sql)){
                                    echo "<span style='color:green;text-align:center;left:60px;position:relative;'>Your account has been successfully created.Login.<br>
                                    </span><br><br>";
                                }
                                else{
                                    echo "<span style='color:red;text-align:center;left:60px;position:relative;'>Email already taken . Try again</span><br><br>";
                                    // echo mysqli_error($conn);
                                }
                            }
                            else{
                                echo mysqli_error();
                            }

                        }
                        
                        ?>
                       

                <!-- <span class="text-center" style="font-size:18px;margin-left:22%;">Already a have an account?</span> -->
                        <br>

                        <p style="text-align:center;font-weight:0px;"><a href="d_login2.php">Already registered? <u style="color:#A8C449;">Login</u></a></p>


            </div>
        </div>
    </div>





</div>

</body>
</html>
