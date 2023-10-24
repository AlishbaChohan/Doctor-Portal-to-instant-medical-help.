<div class="p_form">
    <span class=" h3 text-start text-success text-uppercase p-2" >Call A life saver!</span><br><br>

    <div class="form2">
        <form action="c_admin.php" method="POST">
            <div class="row">
                <div class="col-sm p-2"> <label for="name"  class="form-label" >Patient Name: </label><input type="text" id="name" name="name" class="form-control" required></div>
                <div class="col-sm p-2"> <label for="contact" class="form-label">Contact: </label><input type="text" name="contact" id="contact" class="form-control" value="<?php echo $row1['contact']; ?>" readonly></div>
                <div class="col-sm p-2"><label for="age" class="form-label">Patient Age </label><input type="number" maxlength="2" name="age" id="age" class="form-control" required></div>
            </div>

            <div class="row">
                <div class="col-sm p-2"> <label for="email" class="form-label">Email: </label><input type="text" name="email" id="email" class="form-control" value="<?php echo $row1['email'];?>" readonly ></div>
                <div class="col-sm p-2">
                    
                    <label for="prov"  class="form-label" > Province: </label>
                        <select name="prov" id="prov" class="form-control" required value="select "> 
                        <option>Select Province </option>
                        <option value="Sindh"> Sindh</option>
                        <option value="Punjab"> Punjab </option>
                        <option value="Balochistan"> Balochistan</option>
                        
                        <option value="KPK"> Khyber Pakhtunkhwa</option>
                        <option value="ICT"> Islamabad Capital Territory</option>
                        </select>
                    </div>
                <div class="col-sm p-2"><label for="city" class="form-label">City </label><input type="text"  name="city" id="city" class="form-control" required></div>
            </div>

            <div class="row">
            
                <div class="col-sm p-2"> <label for="pres_add" class="form-label">Present Location: </label><input type="text" name="pres_add" id="pres_add" class="form-control" required></div>
            
            </div>

            <div class="row">
            
                <div class="col-sm p-2"> 
                <label for="symp" class="form-label">Describe your Symptoms Briefly: </label>
                <textarea class="form-control" name="symp" id="symp" style="min-height:100px;" maxlength="250"></textarea>

                     
                </div>

            
            </div>

            <div class="row">
                
                <div class="col-sm text-center pt-2">
                    <br>
                    <input type="submit" value="Call Life Saver" class="btn btn-danger"><br>


                </div>
            </div>

            <div class="row">
                
                <div class="col-sm text-center pt-2 pb-2">
                    <br>
                    <?php
                    if($_SERVER['REQUEST_METHOD']=="POST"){
                        $name=$_POST['name'];
                        $age=$_POST['age'];
                        $contact=$_POST['contact'];

                        $email=$_POST['email'];
                        $province=$_POST['prov'];
                        $city=$_POST['city'];

                        $pres_add=$_POST['pres_add'];
                        $symp=$_POST['symp'];
                        $status="Processing";

                        $p_loc=$pres_add.",".$city.",".$province;

                        $sql="INSERT INTO visit_history(c_id, p_name,p_age,p_contact,p_loc,p_prov,p_city,p_symp,status) values('$id','$name','$age','$contact','$p_loc','$province','$city','$symp','$status')";
                        $res=mysqli_query($conn,$sql);
                        if($res){
                            echo "<span style='color:green;text-align:center;'>Your request has been submitted, life saver is on its way!</span>";
                        }
                        else{
                            echo mysqli_error($conn);
                        }


                    }
                    ?>

                

                    
                </div>
            </div>



        </form>

    </div>
</div>



<span style='color:green;text-align:center;'></span>
<span style='color:red;text-align:center;'></span>