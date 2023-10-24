<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
// $v_id =$_POST["id"];
$dr_id =$_POST["id"];
// $dr_cont =$_POST["id"];


include('connect.php');
$sql="select * from doctor_info where id='$dr_id'";
// $sql ="DELETE FROM edu_details where student_id='$user_id'";
$res=mysqli_query($conn, $sql);
if(mysqli_num_rows($res)>0){
    $row=mysqli_fetch_assoc($res);
        echo $row['contact'];
}
else{
    echo 0;
}
}
?>