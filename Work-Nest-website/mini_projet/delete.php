<?php
 session_start();
$con = new mysqli('localhost','root','','test');
$access=$_SESSION['pseudo'];
if(isset($_GET['deljob'])){
    $salary=$_GET['deljob'];
    $sql="delete from offer where salary=$salary and pseudo='$access' ";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:hireer.php");

    }
    else{
        die(mysqli_error($con));
    }
}

?>