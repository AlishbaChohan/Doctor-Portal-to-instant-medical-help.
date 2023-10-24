<div class="p_form">
    <span class=" h3 text-start text-success text-uppercase p-2" > ASSIGN doctor</span><br><br>
  
        <div class="form2">
              <p class="text-primary">
                  All nearby doctors are listed in the dropdown. Carefully assign suitable doctor for the situation and notify clients or doctors  using there contacts in the processed requests section if needed.
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
                        <th colspan='2'> Doctor</th> 
                        <!-- <th>Doctor Contact</th> -->
                        <th>Action</th>
                        
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                        <!-- <form action="a_assign.php" method="POST"> -->
                        <?php
                            $v_id=$_GET['v_id'];
                            $sql="Select * FROM visit_history Where id='$v_id' AND status='processing' order by created_at DESC";
                            $sr=1;
                            $res=mysqli_query($conn,$sql);

                            if(mysqli_num_rows($res)>0){
                                $row=mysqli_fetch_assoc($res);
                                    // $v_id=$row['id'];
                                    
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
                                    echo "<td style='width:150px;' colspan='2'>";

                                    $sql2="Select * FROM doctor_info Where city like '%$p_city%' and prov='$p_prov' ";
                                    // $sr=1;
                                    $res2=mysqli_query($conn,$sql2);
                                    ?>
                                        <form action="a_assign.php" method="POST">
                                    <?php
                                    echo "<select name='doc_info' class='doc_info'>";
                                    echo"<option value=''>Select Doctor </option>";
                                    if(mysqli_num_rows($res2)>0){
                                        while($row2=mysqli_fetch_assoc($res2)){
                                            $dr_cont=$row['contact'];
                                            echo"<option value='".$row2['id']."'>".$row2['name']." || ".$row2['spec']." || ".$row2['city'].
                                            "</option>";
                                        }
                                    echo"<option value='0'>No doctor available </option>";
                                        }
                                    else{
                                        echo"<option value='0'>No doctor available </option>";
                                         }
                                    echo "</select>";
                                   
                                 

                                    echo "</td>";
                                    
                                    // {$row2["id"]}
                                    // echo "<td>"."<input type='text' name='dr_contact' id='result' class='form-control' readonly>"."</td>";
                                    echo "<td>"."<input type='submit' value='Process' class='btn btn-success text-whitev sub'>"
                                   ."</td>";
                                    
                                    echo "</tr>";

                                
                            }
                            else{
                                echo mysqli_error($conn);
                            }
                        ?>

                            <input type='hidden' name='v_id' id='result'  value="<?php echo $v_id;?>" class='form-control' readonly>
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
                            $dr_id =$_POST["doc_info"];
                            $v_id =$_POST["v_id"];
                            // $dr_cont =$_POST["id"];
                            
                            
                            include('connect.php');
                            $sql="select * from doctor_info where id='$dr_id'";
                            // $sql ="DELETE FROM edu_details where student_id='$user_id'";
                            $res=mysqli_query($conn, $sql);
                            if(mysqli_num_rows($res)>0){
                                $row=mysqli_fetch_assoc($res);
                                    $cont=$row['contact'];
                                    $name=$row['name'];
                            }
                            else{
                                echo 0;
                            }
                            $status="processed";
                            $sql2="UPDATE visit_history SET dr_id='$dr_id', status='$status',dr_contact='$cont', dr_name='$name' where id='$v_id' ";
                            $res2=mysqli_query($conn,$sql2);
                            if($res2){
                                echo "<span style='color:green;text-align:center;'>Your information has been updated successfully !</span>";
                                // header("Location:a_admin.php");
                                ?>
                                <script>
                                    window.location.replace("a_admin.php");
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

<!-- <script>

$(document).ready(function(){
  $("#doc_info").change(function(){
    var doc_id=$(this).val();

    if (doc_id==""){
        $("#result").val("");
    }
    $.ajax({
        url:"ajax1.php",
        type:"POST",
        data:{id:doc_id},
        success : function(data){
            $("#result").val(data);
        }
           
       
        
    });
  });
});
</script> -->