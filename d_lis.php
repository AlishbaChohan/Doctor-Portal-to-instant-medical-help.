<?php
session_start();
?>
<?php
// if($_SERVER['REQUEST_METHOD']="POST"){
    if($_SESSION['status2']=1){
    $id=$_SESSION['id'];
    include("connect.php");
    // $id=8;
    $sql1="Select * From doctor_info where id='$id'";
     $res1=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($res1)>0){
    $row1=mysqli_fetch_assoc($res1);
    }
    else{
        echo mysqli_error($conn);
    }
    $sql2="Select * From doctor_liscense where dr_id='$id'";
     $res2=mysqli_query($conn,$sql2);
    if(mysqli_num_rows($res2)>0){
    $row2=mysqli_fetch_assoc($res2);
    }
    else{
        $row2=["pmc_vide_no"=>"","pmc_issue"=>"","pmc_valid"=>""];
        echo mysqli_error($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="styles2.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" type="image" href="images/l7.png">

    <title>Doctor Admin</title>
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
            include("d_sidebar.php");
            ?>  

            </div>



            <!-- center -->
            <div class="col-sm-10 border">
                <div class="p_form">
                    <span class=" h3 text-start text-success text-uppercase p-2" >Liscence information</span><br><br>

                    <div class="form2">
                        <form action="d_lis.php" method="POST">
                            <div class="row">
                                <div class="col-sm p-2"> 
                                    <label for="no"  class="form-label" >PMC Vide No: </label>
                                    <input type="text" id="no" name="no" class="form-control" value="<?php echo $row2['pmc_vide_no']; ?>" required>
                                </div>


                                <div class="col-sm p-2">
                                     
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm p-2"> 
                                    <label for="issue"  class="form-label" >Issue Date: </label>
                                    <input type="date" id="issue" name="issue" class="form-control" value="<?php echo $row2['pmc_issue']; ?>" required>
                                </div>


                                <div class="col-sm p-2">
                                     
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm p-2"> 
                                    <label for="valid"  class="form-label" >Valid Till: </label>
                                    <input type="date" id="valid" name="valid" class="form-control" value="<?php echo $row2['pmc_valid']; ?>" required>
                                </div>


                                <div class="col-sm p-2">
                                     
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-sm p-2"> 
                                    <label for="name"  class="form-label" >Liscence Pic: </label>
                                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $row1['name']; ?>" required> 
                                    <input type="file" name="ufile" id="profile_img" class="form-control" required>
                                </div>


                                <div class="col-sm p-2">
                                     
                                </div>
                            </div> -->

                            <div class="row">
                                <div class="col-sm p-2"> 
                                <br>
                                <?php
                                        if($_SERVER['REQUEST_METHOD']=="POST"){
                                        $no=$_POST['no'];
                                        $issue=$_POST['issue'];
                                        $valid=$_POST['valid'];

                                        if(mysqli_num_rows($res2)>0){
                                        $sql="UPDATE doctor_liscense SET pmc_vide_no='$no', pmc_issue='$issue' pmc_valid='$valid' where id='$id' ";
                                        $res=mysqli_query($conn,$sql);
                                        if($res){
                                            echo "<span style='color:green;text-align:center;'>Your information has been updated successfully !</span>";
                                        }
                                        else{
                                            echo mysqli_error($conn);
                                            

                                        }

                                        }
                                        else{

                                            $sql="INSERT  INTO doctor_liscense (dr_id,pmc_vide_no,pmc_issue,pmc_valid) values('$id','$no','$issue','$valid') ";
                                            $res=mysqli_query($conn,$sql);
                                            if($res){
                                                echo "<span style='color:green;text-align:center;'>Your information has been updated successfully !</span>";
                                            }
                                            else{
                                                echo mysqli_error($conn);
                                                
    
                                            }
                                        }

                                    }

                                    ?>
                                </div>
                                <div class="col-sm text-end">
                                    <br>
                                    <input type="submit" value="Save Changes" class="btn btn-primary"><br><br>
                                </div>
                            </div>



                        </form>

                    </div>
                </div>




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