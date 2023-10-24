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
                    <span class=" h3 text-start text-success text-uppercase p-2" >Personal information</span><br><br>

                    <div class="form2">
                        <form action="d_info.php" method="POST">
                            <div class="row">
                                <div class="col-sm p-2"> <label for="name"  class="form-label" >Full Name: </label><input type="text" id="name" name="name" class="form-control" value="<?php echo $row1['name']; ?>" required></div>
                                <div class="col-sm p-2"> <label for="contact" class="form-label">Contact: </label><input type="text" name="contact" id="contact" class="form-control" value="<?php echo $row1['contact']; ?>" readonly></div>
                                <div class="col-sm p-2"><label for="cnic" class="form-label">CNIC:(with dashes) </label><input type="text" maxlength="15" name="cnic" id="cnic" class="form-control"  value="<?php echo $row1['cnic']; ?>" required></div>
                            </div>

                            <div class="row">
                                <div class="col-sm p-2"> <label for="email" class="form-label">Email: </label><input type="text" name="email" id="email" class="form-control" value="<?php echo $row1['email']; ?>" readonly ></div>
                                <div class="col-sm p-2">
                                    
                                    <label for="prov"  class="form-label" > Province: </label>
                                        <select name="prov" id="prov" class="form-control"  required> 
                                        <option> </option>
                                        <option value="Sindh"> Sindh</option>
                                        <option value="Punjab"> Punjab </option>
                                        <option value="Balochistan"> Balochistan</option>
                                        
                                        <option value="KPK"> Khyber Pakhtunkhwa</option>
                                        <option value="ICT"> Islamabad Capital Territory</option>
                                        </select>
                                    </div>
                                <div class="col-sm p-2"><label for="city" class="form-label">City </label><input type="text"  name="city" id="city" class="form-control"  value="<?php echo $row1['city']; ?>" required></div>
                            </div>

                            <div class="row">
                            
                                <div class="col-sm p-2"> <label for="pres_add" class="form-label">Present Address: </label><input type="text" name="pres_add" id="pres_add" class="form-control"  value="<?php echo $row1['address']; ?>" required></div>
                            
                            </div>

                            <div class="row">
                            
                                <div class="col-sm p-2"> 
                                    <!-- <label for="pres_add" class="form-label">Present Address: </label><input type="text" name="pres_add" id="pres_add" class="form-control" required> -->
                                    <label for="dateofbirth" class="form-label">Date of Birth: </label><input type="date" name="dateofbirth" id="dateofbirth" class="form-control"   value="<?php echo $row1['dob']; ?>"required>
                                </div>

                                <div class="col-sm p-2"> 
                                    <label for="spec" class="form-label">Medical Speciality(e.g  Cardiology, Neurology etc): </label><input type="text" name="spec" id="spec" class="form-control"  value="<?php echo $row1['spec']; ?>"required>
                                </div>

                                
                            
                            </div>

                            <div class="row">
                                <div class="col-sm p-2"> 
                                <br>
                                    <?php
                                        if($_SERVER['REQUEST_METHOD']=="POST"){
                                        $name=$_POST['name'];
                                        $contact=$_POST['contact'];
                                        $cnic=$_POST['cnic'];

                                        $email=$_POST['email'];
                                        $province=$_POST['prov'];
                                        $city=$_POST['city'];

                                        $pres_add=$_POST['pres_add'];
                                        $spec=$_POST['spec'];
                                        $dob=$_POST['dateofbirth'];
                                        
                
                                        // $add=$pres_add." ,".$city." ,".$province;

                                        $sql="UPDATE doctor_info SET name='$name', cnic='$cnic', prov='$province', city='$city',address='$pres_add',dob='$dob', spec='$spec' where id='$id' ";
                                        $res=mysqli_query($conn,$sql);
                                        if($res){
                                            echo "<span style='color:green;text-align:center;'>Your information has been updated successfully !</span>";
                                        }
                                        else{
                                            

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