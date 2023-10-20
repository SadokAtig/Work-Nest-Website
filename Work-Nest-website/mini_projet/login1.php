<?php
session_start();
if(isset($_POST['name']) ||isset($_POST['full']) ||isset($_POST['mail']) ||isset($_POST['pseudo'])  || isset($_POST['pass'])||isset($_POST['code'])){
$name = $_POST['name'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$pseudo = $_POST['pseudo'];
$full = $_POST['full'];
$code= $_POST['code'];
$conn = new mysqli('localhost','root','','test');
 if($conn->connect_error){
     echo "$conn->connect_error";
     die("Connection Failed : ". $conn->connect_error);
 } 
 if(isset($_POST['sub'])){
    $name = $_POST['name'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$pseudo = $_POST['pseudo'];
$full = $_POST['full'];
$code= $_POST['code'];
$checkuser="select * from sadok where name = '$name'";
$res = mysqli_query($conn,$checkuser);
$count = mysqli_num_rows($res);
if($count>0){
    header("Location: login1.html");
    echo "user already exists ";
}

 
 else {

     $stmt = $conn->prepare("insert into sadok(name, full, mail, pseudo ,pass , code) values(?, ?, ?, ? ,?, ?)");
     $stmt->bind_param("sssssi", $name, $full, $mail,$pseudo,$pass,$code);
     $execval = $stmt->execute();
     
     $stmt->close();
     $conn->close();
    // header("Location: hireer.php");
    if($stmt){
        $_SESSION['pseudo']=$pseudo;
        header("Location: hireer.php");
    }
 }

}
}

?>