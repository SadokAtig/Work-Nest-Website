<?php
session_start();
if(isset($_POST['name']) ||isset($_POST['last']) ||isset($_POST['mail']) ||isset($_POST['pass'])  || isset($_POST['pseudo'])||isset($_POST['identity'])){
$name = $_POST['name'];
$last = $_POST['last'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$pseudo = $_POST['pseudo'];
$identity= $_POST['identity'];
$conn = new mysqli('localhost','root','','test');
 if($conn->connect_error){
     echo "$conn->connect_error";
     die("Connection Failed : ". $conn->connect_error);
 } 
 if(isset($_POST['sub'])){
    $name = $_POST['name'];
    $last = $_POST['last'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $pseudo = $_POST['pseudo'];
    $identity= $_POST['identity'];
$checkuser="select * from projet1 where name = '$name'";
$res = mysqli_query($conn,$checkuser);
$count = mysqli_num_rows($res);
if($count>0){
    header("Location: login.html");
    echo "user already exists ";
}else {
     $stmt = $conn->prepare("insert into projet1(name, last,mail, pass, pseudo,identity) values(?, ?, ?, ? ,?, ?)");
     $stmt->bind_param("sssssi", $name,$last, $mail, $pass,$pseudo,$identity);
     $execval = $stmt->execute();
     echo $execval;
    $_SESSION['pseudo']=$pseudo;
    $_SESSION['name']=$name;
    $_SESSION['mail']=$mail;
     $stmt->close();
     $conn->close();
     if($stmt){
        header('location: form_cv.html');
    }
 }
}
}
?>