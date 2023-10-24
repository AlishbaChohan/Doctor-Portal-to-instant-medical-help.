<div class="p_form">
    <span class=" h3 text-start text-success text-uppercase p-2" > Request history</span><br><br>
        <div class="form2">
            <div class="row">
                <div class="col-sm p-2">
                <div class="table-responsive">
                <table class="table table-striped ">
                    <thead>
                    <tr>
                        <th>Sr.no</th>
                        <th>Req Id.</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Patient</th>
                        <th>Age</th>
                        <th>Location</th>
                        <!-- <th>Symptoms</th> -->
                        <th>Doctor Name</th> 
                        <th>Doctor Contact</th> 

                        <th>Symptoms</th> 
                        <th>Prescriptiom</th> 
                        
                        
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql="Select * FROM visit_history Where c_id='$id' order by created_at DESC";
                            $sr=1;
                            $res=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_assoc($res)){
                                    echo "<tr>";
                                    echo "<td>".$sr."</td>";
                                    echo "<td>".$row['id']."</td>";
                                    echo "<td>".$row['created_at']."</td>";
                                    echo "<td>".$row['status']."</td>";
                                    echo "<td>".$row['p_name']."</td>";
                                    echo "<td>".$row['p_age']."</td>";
                                    echo "<td>".$row['p_loc']."</td>";
                                    
                                    echo "<td>".$row['dr_name']."</td>";
                                    echo "<td>".$row['dr_contact']."</td>";
                                    
                                    echo "<td>".$row['p_symp']."</td>";
                                    echo "<td>".$row['dr_prescript']."</td>";
                                    echo "</tr>";
                                    $sr++;

                                }
                            }
                            else{
                                echo mysqli_error($conn);
                            }
                        ?>


                     
                    </tbody>
                </table>
                </div>

                    
                </div>

            </div>
        </div>

</div>