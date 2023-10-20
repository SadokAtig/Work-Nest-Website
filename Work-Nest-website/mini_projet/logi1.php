<?php
$pseudo = $_POST['pseudo'];
$pass = $_POST['pass'];
$con = new mysqli('localhost','root','','test');
session_start();
	if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} else {
        $stmt = $con->prepare("select * from sadok where pseudo = ?");
        $stmt->bind_param("s", $pseudo);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows >= 0){
            $data = $stmt_result->fetch_assoc();
            if($data['pass'] === $pass){
                $_SESSION['pseudo']=$pseudo;
                header("Location: hireer.php");
            } else 
            
                header("Location: login1.html");
            
        } else {
            header("Location: login1.html");
        }
    }

?>