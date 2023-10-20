<?php
$access=$_SESSION['pseudo'];
$conn = new mysqli('localhost','root','','test');
//$salary=$_GET['updatejob'];
//if(isset($_POST['job']) ||isset($_POST['diplomas'])||isset($_POST['competance']) ||isset($_POST['experience'])  || isset($_POST['salary'])|| isset($_POST['dis'])){
  if(isset($_POST['submit'])) {
  $job = $_POST['job'];
    $diplomas = $_POST['diplomas'];
    $competance =$_POST['competance'];
    $experience = $_POST['experience'];
    $salary= $_POST['salary'];
    $dis= $_POST['dis'];
     if($conn->connect_error){
         die("Connection Failed : ". $conn->connect_error);
     } else {
        $sql="update offer set job='$job',diplomas='$diplomas',competance='$competance',experience='$experience',salary='$salary',dis='$dis' where job='$job' and pseudo='$access'";
        $result=mysqli_query($conn,$sql); 
        if($result){
          header("location:hireer.php");
  
      }
     }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Offer</title>
    <link rel="stylesheet" href="job.css">
</head>
<body>
    <div class="container">
    <div class="title">Post Offer</div>
    <div class="content">
      <form action="update.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Job Title</span>
            <input type="text" placeholder="Enter Job" name="job" required onkeyup="car(this)">
          </div>
          <div class="input-box">
            <span class="details">Diploma required </span>
            <select name="diplomas" required>
                <option disabled selected>Select Diplomas</option>
                <option>General and technological baccalaureate</option>
                <option>baccalaureate Pro</option>
                <option>License</option>
                <option>Master's degree</option>
                <option>BTS</option>
                <option>Others</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">List of competencies</span>
            <div class="input-field">
                <select name="competance" required>
                    <option disabled selected>Select competencies</option>
                    <option>Java, C#, SQL server database, C++</option>
                    <option>HTML, CSS, PHP ,SQL, JS</option>
                    <option>Java, Python, C#, C++</option>
                    <option>Oracle</option>
                    <option>Réseaux et sécurité informatique:Wireshark, Nmap</option>
                    <option>framework: React, Angular, Vue.js</option>
                    <option>Analyse de données:R, Excel, Tableau</option>
                    <option>Cloud Computing:AWS, Azure, Google Cloud</option>
                    <option>Others</option>
                </select>
            </div> 
          </div>
          <div class="input-box">
            <span class="details">Years Of Experience</span>
            <input type="number" placeholder="Enter issued authority" required name="experience">
          </div>
         
          <div class="input-box">
            <span class="details">Salary</span>
            <input type="text" placeholder="Job Salary" name="salary" onkeyup="numberonly(this)" required>
          </div>
          <div class="input-box">
            <span class="details">Date Of Expired</span>
            <input type="date" placeholder="jj/mm/yyyy" name="date" >
          </div>
        </div>
        <div class="input-box">
            <span class="details">Job Description</span>
            <textarea class="textarea" placeholder="Description" name="dis"></textarea>
        </div>
        <div class="button">
          <a href="hireer.php">
         <input type="submit"  value="Register " name="submit">
          </a>
        </div>
      </form>
    </div>
  </div>
  <script >
    function car(input){
        var c = /[^a-zA-Z]/gi;
       input.value = input.value.replace(c,"");
    
            }
            function numberonly(input){

              var num = /[^0-9]/gi;
              input.value = input.value.replace(num,"");
              
                }
         
  </script>
</body>
</html>