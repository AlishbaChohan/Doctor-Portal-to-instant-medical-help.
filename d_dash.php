<div class="p_form">
    <span class=" h3 text-start text-success text-uppercase p-2" > CUrrent visits</span><br><br>
  
        <div class="form2">
              <p class="text-primary">Your on going visits are displayed here.Carefully fill in the prescription after check up and then complete the visit.</p><br>
            <div class="row">
                <div class="col-sm p-2">
                <div class="table-responsive">
                <table class="table table-striped ">
                    <thead>
                    <tr>
                        <th>Sr.no</th>
                        <th>Req Id.</th>
                        <th>Date</th>
                        <th>Patient</th>
                        <th>Age</th>
                        <th>Symptoms</th>
                        <th>Location</th>
                        <th>Contact</th> 

                        
                        <th>Action</th>
                        
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                        <!-- <form action="d_admin.php" method="POST"> -->
                        <?php
                            $sql="Select * FROM visit_history Where dr_id='$id' AND status='processed' order by created_at DESC";
                            $sr=1;
                            $res=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_assoc($res)){
                                    $v_id=$row['id'];

                                    ?>

                                    <!-- <input type='hidden' name='v_id' id='v_id' value='<?php echo $v_id; ?>' > -->

                                <?php
                                    echo "<tr>";
                                    echo "<td>".$sr."</td>";
                                    echo "<td>".$v_id."</td>";
                                    echo "<td>".$row['created_at']."</td>";
                                    echo "<td>".$row['p_name']."</td>";
                                    echo "<td>".$row['p_age']."</td>";
                                    echo "<td>".$row['p_symp']."</td>";
                                    echo "<td>".$row['p_loc']."</td>";
                                    echo "<td>".$row['p_contact']."</td>";
                                    
                                    // echo "<td>"."<input type='text' name='dr_prescript' class='form-control' required>"."</td>";
                                    echo "<td>"."<button class='btn btn-success'> <a class='text-white text-decoration-none' href='d_complete.php?v_id=".$v_id."'>Prescription</a></button "."</td>";
                                    echo "</tr>";
                                    $sr++;

                                }
                            }
                            else{
                                echo mysqli_error($conn);
                            }
                        ?>


                        <!-- </form> -->
                    </tbody>
                </table>
                </div>

                    
                </div>

            </div>
            <br><br>

            <div class="row">
                <div class="col-sm p-2">
                    <?php
                        if($_SERVER['REQUEST_METHOD']=="POST"){
                            $pres=$_POST['dr_prescript'];
                            $status="completed";
                            
    
                            // $add=$pres_add." ,".$city." ,".$province;

                            $sql="UPDATE visit_history SET dr_prescript='$pres', status='$status' where id='$v_id' ";
                            $res=mysqli_query($conn,$sql);
                            if($res){
                                echo "<span style='color:green;text-align:center;'>Your information has been updated successfully !</span>";
                            }
                            else{
                                

                            }
                        }

                    ?>
                </div>

            </div>




        </div>

</div>
<br><br>