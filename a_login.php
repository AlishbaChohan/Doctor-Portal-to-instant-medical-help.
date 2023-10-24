<?php
session_start();
?>
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
                <p style="font-size:30px;font-weight:bold;text-align:center;margin-top:10px; line-height:35px; color:rgb(60, 60, 60);" class="text-uppercase"> Welcome Back <br>Administrators !</p>
                
                <form action="a_login.php" method="POST">
                    <br><br>
                    <div class="container-sm">
                        <input type="email" class="form-control" id="a_email" placeholder="Email" name="a_email"><br>
                        <input type="password" class="form-control" id="a_pswd" placeholder="Password" name="a_pswd"><br>
                        <input type="submit" value="LOG IN" class="btn btn-block" style="color:white;background-color:#A8C449;"><br>

                        <br>
                    </div>
                    
                            
                </form>

                <!-- <span class="text-center" style="font-size:18px;margin-left:22%;">Already a have an account?</span> -->
                        <br>

                        <?php
                            include('connect.php');
                            if($_SERVER['REQUEST_METHOD']=='POST'){
                                $email=$_POST['a_email'];
                                $pass1=$_POST['a_pswd'];
                                $active="active";


                                    if(isset($email)){
                                    $sql="SELECT * from admin_info where email='$email' AND password='$pass1'";
                                    $res=mysqli_query($conn,$sql);
                                        if(mysqli_num_rows($res)>0){  

                                        while($row=mysqli_fetch_assoc($res))
                                            {
                                               
                                            echo $_SESSION['id']=$row['id'];
                                            $_SESSION['status3']=1;
                                            // $_SESSION['email']=$row['email_id'];
                                            // $_SESSION['profile_img']=$row['profile_pic'];
                                    
                                            header('Location:a_admin.php');
                                            // echo mysqli_error($conn);
                                            }
                                            // echo 1;
                                        }
                                
                                    
                                    else{
                                        // echo 0;
                                        // echo mysqli_error($conn);
                                        echo "<span style='color:red;text-align:center;left:60px;position:relative;'>You are not a user / invalid loggin details </span><br>";
                                    } 
                                  
                                }  
                            }
                        ?>
                     <br>

                        <!-- <p style="text-align:center;font-weight:0px;"><a href="d_signup.php">Haven't registered? <u style="color:#A8C449;">SignUp</u></a></p> -->
                        <!-- <p style="text-align:center;font-weight:0px;"><a href="#">Forgot Password?</a></p> -->
            </div>
        </div>
    </div>
    
   






</div>

</body>
</html>