<div class="p_form">
    <span class=" h3 text-start text-success text-uppercase p-2" > Dashboard</span><br><br>
  
        <div class="form2">
              <p class="text-primary">
                  The Clients requests are displayed here. Carefully assign suitable doctor for the situation.
                </p><br>
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
                        <th>Location</th>
                        <th>Symptoms</th>
                        <!-- <th colspan='2'> Doctor</th>  -->
                        <th>Action</th>
                        
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                        <!-- <form action="d_admin.php" method="POST"> -->
                        <?php
                            $sql="Select * FROM visit_history Where status='processing' order by created_at DESC";
                            $sr=1;
                            $res=mysqli_query($conn,$sql);

                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_assoc($res)){
                                    $v_id=$row['id'];
                                    ?>
                                        <input type='hidden' name='v_id' id='v_id' value='<?php echo $v_id; ?>' >
                                    <?php
                                    $p_city=$row['p_city'];
                                    $p_prov=$row['p_prov'];


                                    echo "<tr>";
                                    echo "<td>".$sr."</td>";
                                    echo "<td>".$v_id."</td>";
                                    echo "<td>".$row['created_at']."</td>";
                                    echo "<td>".$row['p_name']."</td>";
                                    echo "<td>".$row['p_age']."</td>";

                                    echo "<td>".$row['p_loc']."</td>";
                                    echo "<td>".$row['p_symp']."</td>";
                                    // echo "<td style='width:150px;' colspan='2'>";

                                    // $sql2="Select * FROM doctor_info Where city like '%$p_city%' and prov='$p_prov' ";
                                    // // $sr=1;
                                    // $res2=mysqli_query($conn,$sql2);
                                    // echo "<select name='doc_info' id='doc_info'>";
                                    // if(mysqli_num_rows($res2)>0){
                                    //     while($row2=mysqli_fetch_assoc($res2)){
                                    //         $dr_cont=$row['contact'];
                                    //         echo"<option value='".$row2['id']."'>".$row2['name']."||".$row2['spec']."||";$row2['city'].
                                    //         "</option>";
                                    //     }

                                    //     }
                                    // else{
                                    //     echo"<option value='0'>No doctor available </option>";
                                    //      }
                                    // echo "</select>";
                                   
                                    // echo "<td>"."<input type='text' name='dr_prescript' class='form-control' required>"."</td>";

                                    // echo "</td>";
                                    
                                    // {$row2["id"]}
                                    echo "<td>"."<button class='btn btn-success sub'><a class='text-decoration-none text-white' href='a_assign.php?v_id=".$v_id."'>Assign Doctor</a></button>"
                                   ."</td>";
                                    
                                    echo "</tr>";

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
                    <div id="result"> </div>
                    <?php
                        // if($_SERVER['REQUEST_METHOD']=="POST"){
                        //     $pres=$_POST['dr_prescript'];
                        //     $status="completed";
                            
    
                        //     // $add=$pres_add." ,".$city." ,".$province;

                        //     $sql="UPDATE visit_history SET dr_prescript='$pres', status='$status' where id='$v_id' ";
                        //     $res=mysqli_query($conn,$sql);
                        //     if($res){
                        //         echo "<span style='color:green;text-align:center;'>Your information has been updated successfully !</span>";
                        //     }
                        //     else{
                                

                        //     }
                        // }

                    ?>
                </div>

            </div>




        </div>

</div>
<br><br>

