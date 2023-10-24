<?php
session_start();
?>
<?php
// if($_SERVER['REQUEST_METHOD']="POST"){
    if($_SESSION['status3']=1){
    $id=$_SESSION['id'];
    include("connect.php");
    // $id=8;
    $sql1="Select * From admin_info where id='$id'";
     $res1=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($res1)>0){
    $row1=mysqli_fetch_assoc($res1);
    }
    else{
        echo mysqli_error($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="60">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="styles2.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" type="image" href="images/l7.png">

    <title>Administrator Admin</title>
</head>
<body>
    <div class="container-fluid">
        <!-- header -->

        <div class="row border">
            <?php
            include("ad_menu.php");
            ?>  
           
        </div>

        <div class="row"> 
            
       
            <!-- sidebar -->
            
            <div class="col-sm-2 sidebar ">

             <?php
            include("a_sidebar.php");
            ?>  

            </div>



            <!-- center -->
            <div class="col-sm-10 border">
            <?php
            include("a_dash.php");
            ?> 

            </div>


            <!-- endbar -->
            <!-- <div class="col-sm-2 border border">

            </div> -->



        </div>

    </div>
</body>
</html>

<?php

}

// else{
//     header("Location:d_login2.php");
// }
// }
// else{
//     header("Location:d_login2.php");
// }
?>