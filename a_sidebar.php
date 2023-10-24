<div class="row">
    <div class="col-sm">
        <?php
            // if ($row1["profile_pic"]==""){
            //     $pic="images/profile_pic.png";
            // }
            // else{ 
            //     $pic=$row1["profile_pic"];
            // }
        ?>
        
    
        <img src="images/a_pic.png" class="dp mx-auto d-block ">
        
    </div>
</div>

<div class="row">
    <div class="col-sm mt-3 text-white">
        <table class="table table-hover  text-white text-center" >
            <thead>
            <tr>
                <th class="text-center">Welcome <?php echo $row1['name'];?> </th>
                
            </tr>
            </thead>

            <tbody>
            <tr class="">
            <td><a href="a_admin.php" class="text-decoration-none " style="color:white; ">Dashboard</a></td>
            
        
            </tr>
            <tr>
                <td><a href="a_proc.php" class="text-decoration-none " style="color:white; ">Processed Requests</a></td>
            
            </tr>
            <tr>
                <td><a href="a_comp.php" class="text-decoration-none " style="color:white; ">Completed Requests</a></td>
            
            </tr>
            <tr>
                <td><a href="logout.php" class="text-decoration-none " style="color:white; ">Logout</a></td>
                
            </tr>
    
                
            </tr>
            
            </tbody>
        </table>
    </div>
</div>