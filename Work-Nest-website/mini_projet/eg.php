<?php
session_start();
if(isset($_POST['name']) ||isset($_POST['date']) ||isset($_POST['mail']) ||isset($_POST['phone'])  || isset($_POST['stat'])||isset($_POST['adr'])||isset($_POST['University'])||isset($_POST['diplomas'])||isset($_POST['competance'])||isset($_POST['experience'])||isset($_POST['pseudo'])){
$name = $_POST['name'];
$date = $_POST['date'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$stat = $_POST['stat'];
$adr = $_POST['adr'];
$University = $_POST['University'];
$diplomascv= $_POST['diplomas'];
$competancecv= $_POST['competance'];
$experiencecv= $_POST['experience'];
$pseudo = $_POST['pseudo'];

$conn = new mysqli('localhost','root','','test');
 if($conn->connect_error){
     echo "$conn->connect_error";
     die("Connection Failed : ". $conn->connect_error);
 } else {
     $stmt = $conn->prepare("insert into cv(name, date, mail, phone ,stat , adr, University, diplomascv, competancecv, experiencecv,pseudo) values(?, ?, ?, ? ,?, ?, ?, ?, ?, ?,?)");
     $stmt->bind_param("sssisssssis", $name, $date, $mail,$phone,$stat,$adr,$University,$diplomascv,$competancecv,$experiencecv,$pseudo);
     $execval = $stmt->execute();
     $stmt->close();
     $conn->close();
    $pseu = $_POST['pseudo'] ;
     header("Location: demandeur_job.php");
 }
}
?>