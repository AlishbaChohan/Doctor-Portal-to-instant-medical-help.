
<button type="button" class="menu-butt" data-bs-toggle="modal" data-bs-target="#myModal2">Client</button>
<!-- The Modal -->
<div class="modal" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="color:#A8C449;"> CLIENTS LOGIN</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div style="width:70%;margin:auto;padding-bottom:25px;">
                    <!-- <form action="c_login.php"> -->
                        
                        <!-- <p style="font-size:25px;font-weight:bold;text-align:center;"> Welcome back  Loyal  clients!</p><br>
                        <div class="mb-1">

                            <input type="email" class="form-control" id="c_email" placeholder="Email" name="c_email">
                        </div>
                        <div class="mb-2 mt-3">
                        
                            <input type="password" class="form-control" id="c_pswd" placeholder="Password" name="c_pswd">
                        </div><br><br>
                    
                        <button type="button" name="c_log_butt" id="c_log_butt" class="btn btn-block" style="background-color:#A8C449;color:white;float:right;">Login</button> -->
                        
                        
                    <!-- </form> -->
                    

                    <!-- <div id="c_result" style="margin-top:10px;margin-botto:10px;"></div>
                   
                    <br><br><br>


                    <p style="text-align:center;font-weight:0px;"><a href="c_signup.php">Haven't registered? <u style="color:#A8C449;">SignUp</u></a></p>
                    <p style="text-align:center;font-weight:0px;"><a href="#">Forgot Password?</a></p> -->

                    <p style="font-size:25px;font-weight:bold;text-align:center;"> Welcome Loyal Clients!</p><br>
                     
                     <p style="text-align:center;">Every moment is precious for you and your loved ones</p>
                    <div style="position:relative;left:70px; margin:auto;"> 
                  <br>
                    <button type="button" class="btn  btn-lg" style="background-color:#A8C449; color:white;"><a href="c_login2.php" style="color:white;">LOGIN</a></button>
                    <button type="button" class="btn btn-lg" style="background-color:#A8C449; color:white;"><a href="c_signup.php" style="color:white;">SIGN UP</a></button>
                </div>

                  


                </div>   
            </div>

   
        </div>
    </div>
</div>     





<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        $(document).ready(function(){
                            $("#c_log_butt").click(function(){
                               var c_email =$("#c_email").val();
                               var c_pass =$("#c_email").val();

                               if (c_email!= '' && c_pass != ''){
                                    $.ajax({
                                        url:"c_login_req.php",
                                        method:"POST",
                                        data:{email:c_email, password:c_pass},
                                        success:function(data){

                                            $("#res").html(data);
                                            // if(data=="1"){
                                            //     // <?php
                                            //     // header('Location:c_admin.php'); 
                                            //     // ?>

                                            //     alert("you are a user");
                                            // }
                                            // else{
                                            //     $("#c_result").html("<span style='color:red;text-align:center;padding-top:10px;borde:1px solid black;margin-bottom:10px;height:30px; position:relative;'>You are not a user / invalid loggin details </span>");
                                            // }
                                        }
                                    });
                               }
                               else{
                                   alert("Please fill both email and password");
                               }

                            });

                        });
                    </script> -->