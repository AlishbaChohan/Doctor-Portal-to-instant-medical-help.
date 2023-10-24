<?php
session_start();
include('connect.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['c_email'];
    $pass1=md5($_POST['c_pswd']);
    $active="active";


        if(isset($_POST['email'])){
        $sql="SELECT * from client_info where email='$email' AND password='$pass1' AND status='$active'";
        $res=mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0){  

            while($row=mysqli_fetch_assoc($res))
                {
                $_SESSION['id']=$row['id'];
                $_SESSION['name']=$row['name'];
                $_SESSION['email']=$row['email_id'];
                // $_SESSION['profile_img']=$row['profile_pic'];
        
                header('Location:c_admin.php');
                }
                echo 1;
            }
    
        
        else{
            // echo 0;
            echo "<span style='color:red;text-align:center;'>You are not a user / invalid loggin details </span>";
        }
    }  
}
?>