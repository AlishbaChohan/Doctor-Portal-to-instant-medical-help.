<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        include("links.php");
    ?>
    <title>Lifesaver</title>
</head>
<body>


    <div class="container-fluid border"> 
    <!-- #22ddd4 -->
    <!-- #04f8fbs -->
    <!-- #0af5e4 -->
    <!-- #17e8d6 -->


    <div class="row">
          <?php
          include("header.php");
          ?>
    </div>
 
        <div class="row ">
        <?php
          include("menu.php");
          ?>
        </div>

     

        <div class="row content">
            <div class="col-sm pt-2 border">


                <div class="row">
                    <div class="col-sm">
                    <?php
                    include("slideshow.php");
                    ?>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-sm " >
                      <div class="ab" id="ab">
                            <!-- <center> <img src="images/about-bg.jpg" width="90%" ></center> -->
                            <div class="ab-text"> 
                                <h2>Welcome to <span style="color:#A8C449;">Life Saver</span></h2>
                                <p>
                                    The distance between life and death is only of few minutes.<br>
                                    So instead of letting those moments flow rushing to hospitals<br> 
                                    or waiting for ambulance,lets call a lifesaver who is around <br>
                                    and can reach you earlier in that state of emergency and <br>
                                    <span style="color:#A8C449;font-weight:700;">Changes your Life Destination!</span>
                                </p>
                                <br>

                                <img src="images/about2.jpg" style="width:100px;height:100px;border-radius:50px;">
                                <span style="font-weight:900; font-size:22px;margin-left:15px;">
                                    CEO, Life Saver
                                </span>
                            
                            </div>
                      </div> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm mt-3 mb-3">
                        <div class="team-edit">
                            <?php
                            include("team.php");
                            ?>
                        </div>
                    </div>
                </div>









                    
                       
            </div>
        </div>


        


        <div class="row">
            <div class="col-sm" style="background-color:#EBECF0;" id="foot">
                <?php
                    include("footer.php");
                ?>
            </div>
        </div> 

     </div>
    
</body>
</html>