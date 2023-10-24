<div class="row">
    <div class="col-sm">
        
        <?php
            if ($row1["profile_pic"]==""){
                $pic="images/profile_pic.png";
            }
            else{ 
                $pic=$row1["profile_pic"];
            }
        ?>
        
    
        <img src="<?php echo $pic;?>" class="dp mx-auto d-block ">
        
    </div>
</div>

<div class="row">
    <div class="col-sm mt-3 text-white">
        <table class="table table-hover  text-white text-center" >
            <thead>
            <tr>
                <th class="text-center">
                    Welcome  <?php echo ucwords($row1['name']);?> !<br>
                   <!-- Member Since <?php echo date($row1['created_at']);?> ! -->

             </th>

                
            </tr>
            </thead>

            <tbody>
            <tr class="">
            <td><a href="d_admin.php" class="text-decoration-none " style="color:white; ">Dashboard</a></td>
            
        
            </tr>
            <tr>
                <td><a href="d_hist.php" class="text-decoration-none " style="color:white; ">Visit History</a></td>
            
            </tr>
            <tr>
                <td><a href="d_info.php" class="text-decoration-none " style="color:white; ">Personal Info</a></td>
            
            </tr>
            <tr>
                <td><a href="d_edu.php" class="text-decoration-none " style="color:white; ">Education</a></td>
            
            </tr>
            <tr>
                <td><a href="d_lis.php" class="text-decoration-none " style="color:white; ">Liscence</a></td>
            
            </tr>
            <tr>
                <td><a href="d_exp.php" class="text-decoration-none " style="color:white; ">Experience</a></td>
            
            </tr>
            <tr>
                <td><a href="d_pro.php" class="text-decoration-none " style="color:white; ">Profile Picture</a></td>
            
            </tr>
            <tr>
                <td><a href="logout.php" class="text-decoration-none " style="color:white; ">Logout</a></td>
                
            </tr>
    
                
            </tr>
            
            </tbody>
        </table>
    </div>
</div>