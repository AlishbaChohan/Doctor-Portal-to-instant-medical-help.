<div class="p_form">
<span class=" h3 text-start text-success text-uppercase p-2 mt-3" >Work Experience</span><br><br>

<div class="form2">
    <form action="d_exp.php" method="POST">
        <div class="row">
            <div class="col-sm">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            
                            <th>Institute</th>
                            <th>Position/Rank</th>
                            <th>Starting Time</th>
                            <th>End Time</th>
                            <th>Duties</th>
                            <!-- <th>Percentage</th> -->
                            <!-- <th>Degree Picture</th> -->
                            <!-- <th>Name of Board/University</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                            <td> <input type="text" class="form-control"  name="inst"></td>
                            <td><input type="text" class="form-control" name="pos"></td>
                            <td><input type="text" class="form-control" name="s_y"></td>
                            <td><input type="text" class="form-control" name="e_y"></td>
                            <td><input type="text" class="form-control"  name="duties" placeholder="Describe briefly"></td>
                          
                            <!-- <td><input type="text" class="form-control" name="deg_pic"></td> -->
                            <!-- <td><input type="text" class="form-control" name="board1"></td> -->
                            <td><input type="submit" class="btn btn-primary btn-sm" name="submit"></td>
                            

                        </tr>
                        
                    </tbody>
                </table>


            </div>


        

        </div>
        </form>

        <div class="row">
            <div class="col-sm">
                
               

                <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                //edu variables

                $id=$_SESSION['id'];
                
                $inst= $_POST['inst'];
                $pos= $_POST['pos'];
                $s_y= $_POST['s_y'];
                $e_y= $_POST['e_y'];
                $duties= $_POST['duties'];


                $sql="INSERT INTO doctor_exp
                    (dr_id, institute,position,start_year,end_year,duties)
                    VALUES ('$id','$inst','$pos','$s_y','$e_y','$duties')
                    ";
                    // $sql="SELECT * FROM edu_details ed,degree d Where student_id='$s_id' AND ed.degree_id=d.id";

                $res=mysqli_query($conn,$sql);

                if($res){
                    echo "<br><span style='color:green;text-align:center;'>Experience record added successfully.<br></span><br>";
                
                }
                else{
                    // echo mysqli_error($conn);
                    echo "<br><br><span style='color:red;text-align:center;'>Error inserting record.</span>";
                }

                }
                ?>

               
            </div>
        </div>

        
        <div class="row">
            <div class="col-sm">
            <div class="table-responsive">
            <?php
                $id=$_SESSION['id'];
                // $s_id=1;
                $sql2="SELECT * FROM doctor_exp Where dr_id='$id' ";

                $res=mysqli_query($conn,$sql2);
                if(mysqli_num_rows($res)>0){
                echo "<br><br><table class='table table-striped'>";
                echo "    
                        <thead>
                        <tr>
                            <th>Institute</th>
                            <th>Position/Rank</th>
                            <th>Starting Time</th>
                            <th>End Time</th>
                            <th>Duties</th>
                        </tr>
                        </thead>
                        <tbody>";

                while($row=mysqli_fetch_assoc($res)){
                    echo "<tr>";
                    echo "<td>".$row['institute']."</td>";
                    echo "<td>".$row['position']."</td>";
                    echo "<td>".$row['start_year']."</td>";
                    echo "<td>".$row['end_year']."</td>";
                    echo "<td>".$row['duties']."</td>";
                
                    echo "</tr>";
                }
                echo "</tbody>";
            }
            ?>
            </table>
            </div>
        </div>
        </div>
</div>
<br><br>