<?php
session_start();
?><!DOCTYPE html>
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
                <p style="font-size:30px;font-weight:bold;text-align:center;margin-top:10px; line-height:35px; color:rgb(60, 60, 60);" class="text-uppercase"> Signup Once <br>Have Life time safety !</p>
                
                <form action="c_login2.php" method="POST">
                    <br><br>
                    <div class="container-sm">
                        <input type="email" class="form-control" id="c_email" placeholder="Email" name="c_email"><br>
                        <input type="password" class="form-control" id="c_pswd" placeholder="Password" name="c_pswd"><br>
                        <input type="submit" value="LOG IN" class="btn btn-block" style="color:white;background-color:#A8C449;"><br>

                        <br>
                    </div>
                    
                            
                </form>

                <!-- <span class="text-center" style="font-size:18px;margin-left:22%;">Already a have an account?</span> -->
                        <br>

                        <?php
                            include('connect.php');
                            if($_SERVER['REQUEST_METHOD']=='POST'){
                                $email=$_POST['c_email'];
                                $pass1=md5($_POST['c_pswd']);
                                $active="active";


                                    if(isset($_POST['c_email'])){
                                    $sql="SELECT * from client_info where email='$email' AND password='$pass1' AND status='$active'";
                                    $res=mysqli_query($conn,$sql);
                                        if(mysqli_num_rows($res)>0){  

                                        while($row=mysqli_fetch_assoc($res))
                                            {
                                           
                                            $_SESSION['id']=$row['id'];
                                            $_SESSION['status']=1;
                                     
                                            // $_SESSION['profile_img']=$row['profile_pic'];
                                    
                                            header('Location:c_admin.php');
                                            }
                                            echo 1;
                                        }
                                
                                    
                                    else{
                                        echo mysqli_error($conn);
                                        echo "<span style='color:red;text-align:center;' class='text-center'>You are not a user / invalid loggin details </span><br>";
                                    }
                                }  
                            }
                        ?>
                     <br>

                        <p style="text-align:center;font-weight:0px;"><a href="c_signup.php">Haven't registered? <u style="color:#A8C449;">SignUp</u></a></p>
                        <p style="text-align:center;font-weight:0px;"><a href="#">Forgot Password?</a></p>
            </div>
        </div>
    </div>
    
   






</div>

</body>
</html>