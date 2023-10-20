<?php
$pseudo = $_POST['pseudo'];
$pass = $_POST['pass'];
session_start();
$con = new mysqli('localhost','root','','test');
	if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} 
    else {
        $stmt = $con->prepare("select * from projet1 where pseudo = ?");
        $stmt->bind_param("s", $pseudo);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows >= 0){
            $data = $stmt_result->fetch_assoc();
            if($data['pass'] === $pass){
                $_SESSION['pseudo']=$pseudo;
                header("Location: demandeur_job.php");
            } else {
                header("Location: login.html");
            }
        } else {
            header("Location: login.html");
        }
    }

?>