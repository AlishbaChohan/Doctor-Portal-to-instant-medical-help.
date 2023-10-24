
    <div class="p_form">
        <span class=" h3 text-start text-success text-uppercase p-2 mt-3" >Educational Details</span><br><br>

        <div class="form2">
            <form action="d_edu.php" method="POST">
                <div class="row">
                    <div class="col-sm">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Degree</th>
                                    <th>Institute</th>
                                    <th>Starting Year</th>
                                    <th>Passing Year</th>
                                    <th>Remarks/Grades</th>
                                    <!-- <th>Percentage</th> -->
                                    <!-- <th>Degree Picture</th> -->
                                    <!-- <th>Name of Board/University</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 
                                        <select name="degree1" id="degree" class="form-control" required> 
                                            <option></option>
                                            <option value="Matric">Matric</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Undergraduate">Undergraduate</option>
                                        
                                        </select>
                                        </td>
                                    <td> <input type="text" class="form-control"  name="inst"></td>
                                    <td><input type="text" class="form-control" name="s_y"></td>
                                    <td><input type="text" class="form-control" name="p_y"></td>
                                    <td><input type="text" class="form-control"  name="remarks"></td>
                                    <!-- <td><input type="text" class="form-control" name="p1"></td> -->
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

                        $deg= $_POST['degree1'];
                        $inst= $_POST['inst'];
                        $s_y= $_POST['s_y'];
                        $p_y= $_POST['p_y'];
                        $remarks= $_POST['remarks'];


                        $sql="INSERT INTO doctor_edu
                            (dr_id,deg_title, institute,start_year,passing_year,remarks)
                            VALUES ('$id','$deg','$inst','$s_y','$p_y','$remarks')
                            ";
                            // $sql="SELECT * FROM edu_details ed,degree d Where student_id='$s_id' AND ed.degree_id=d.id";

                        $res=mysqli_query($conn,$sql);

                        if($res){
                            echo "<br><span style='color:green;text-align:center;'>Educational record added successfully.<br></span><br>";
                        
                        }
                        else{
                            // echo mysqli_error($conn);
                            echo "<br><br><span style='color:red;text-align:center;'>
                            Degree information has already been added.</span>";
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
                            $sql2="SELECT * FROM doctor_edu Where dr_id='$id' ";

                            $res=mysqli_query($conn,$sql2);
                            if(mysqli_num_rows($res)>0){
                            echo "<br><br><table class='table table-striped'>";
                            echo "    
                                    <thead>
                                    <tr>
                                        <th>Degree </th>
                                        <th>Institute</th>
                                        <th>Starting Year</th>
                                        <th>Passing Year</th>
                                        <th>Remarks/Grades</th>
                                    </tr>
                                    </thead>
                                    <tbody>";

                            while($row=mysqli_fetch_assoc($res)){
                                echo "<tr>";
                                echo "<td>".$row['deg_title']."</td>";
                                echo "<td>".$row['institute']."</td>";
                                echo "<td>".$row['start_year']."</td>";
                                echo "<td>".$row['passing_year']."</td>";
                                echo "<td>".$row['remarks']."</td>";
                            
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
    </div>
    <br><br>