<div class="p_form">
    <span class=" h3 text-start text-success text-uppercase p-2" > Add prescription</span><br><br>
  
        <div class="form2">
              <p class="text-primary">
                 Carefully add prescription after the visit.
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
                        <th>Symptoms</th>
                        <th>Location</th>
                        <th>Contact</th>
                        <th>Prescription</th> 
                        <th>Action</th>
                        
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                        <!-- <form action="a_assign.php" method="POST"> -->
                        <?php
                            $v_id=$_GET['v_id'];
                            
                            $sql="Select * FROM visit_history Where dr_id='$id' AND status='processed'  and id='$v_id' order by created_at DESC";
                            $sr=1;
                            $res=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_assoc($res)){
                                    $v_id=$row['id'];

                                    ?>
                                    <form action="d_complete.php" method="POST">
                                    <input type='hidden' name='v_id' id='v_id' value='<?php echo $v_id; ?>' >

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
                                   
                                    echo "<td>"."<input type='text' name='dr_prescript' class='form-control' required>"."</td>";
                                    echo "<td>"."<input type='submit' value='Complete' class='btn text-white btn-success'> "."</td>";
                                    echo "</tr>";
                                    $sr++;

                                }
                            }
                            else{
                                echo mysqli_error($conn);
                            }
                        ?>
                                       
                                    

                            <!-- <input type='hidden' name='v_id' id='result'  value="<?php echo $v_id;?>" class='form-control' readonly> -->
                        </form>
                    </tbody>
                </table>
                </div>

                    
                </div>

            </div>
            <br><br>

            <div class="row">
                <div class="col-sm p-2">
                    <!-- <div id="result"> </div> -->
                    <?php
                        if($_SERVER['REQUEST_METHOD']=="POST"){
                            $dr_prescript =$_POST["dr_prescript"];
                            $v_id =$_POST["v_id"];
                            // $dr_cont =$_POST["id"];
                            
                            
                            include('connect.php');
                           
                            $status="completed";
                            $sql2="UPDATE visit_history SET dr_prescript='$dr_prescript', status='$status' where id='$v_id' ";
                            $res2=mysqli_query($conn,$sql2);
                            if($res2){
                                echo "<span style='color:green;text-align:center;'>Your information has been updated successfully !</span>";
                                // header("Location:a_admin.php");
                                ?>
                                <script>
                                    window.location.replace("d_admin.php");
                                </script>
                                <?php
                            }
                            else{
                                echo mysqli_error($conn);

                            }
                        }

                    ?>
                </div>

            </div>




        </div>

</div>
<br><br>