<?php
session_start();
$access=$_SESSION['pseudo'];
if(isset($_POST['job']) ||isset($_POST['diplomas'])||isset($_POST['competance']) ||isset($_POST['experience'])  || isset($_POST['salary'])|| isset($_POST['dis'])){
$job = $_POST['job'];
$diplomas = $_POST['diplomas'];
$competance =$_POST['competance'];
$experience = $_POST['experience'];
$salary= $_POST['salary'];
$pseudo= $_POST['pseudo'];
$dis= $_POST['dis'];
$conn = new mysqli('localhost','root','','test');
 if($conn->connect_error){
     die("Connection Failed : ". $conn->connect_error);
 } else {
     $stmt = $conn->prepare("insert into offer(job, diplomas,competance , experience,salary,  dis,pseudo) values(?, ?, ?, ? ,?, ?,?)");
     $stmt->bind_param("sssiiss", $job,$diplomas,$competance,$experience,$salary,$dis,$pseudo);
     $execval = $stmt->execute();
        header('location : hireer.html');
     $stmt->close();
     $conn->close();
     $_SESSION['job']=$job;
     header('location : hireer.html');
     
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
  <ul>
  <a href="hireer.php"><li class="prev"><span></span></li></a>
    
    
</ul>
    <div class="container">
    <div class="title">Post Offer</div>
    <div class="content">
      <form action="job.php" method="post">
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
            <span class="details">Pseudo</span>
            <input type="text" placeholder="Admin Pseudo" name="pseudo"  required>
          </div>
        </div>
        <div class="input-box">
            <span class="details">Job Description</span>
            <textarea class="textarea" placeholder="Description" name="dis"></textarea>
        </div>
        <div class="button">
          
         <input type="submit"  value="Register ">
          
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
/*
                const offre = {
    let competences = " <?= $competance ?>",
    let anneesExperience = " <?= $experience ?>",
    let diplomeRequis = "<?= $diplomas ?>" ,
    let salairePropose = " <?= $salary ?>"
  };
  
  // Exemple de demandeur d'emploi
  const demandeur = {
    let competences = "<?= $competance ?>",
    let anneesExperience = "<?= $experience ?>",
    let diplome =  "<?= $diplomas ?>"
  };


/*
  function calculerScoreDemandeur(offre, demandeur) {
  let score = 0;

  // Calcul du score en fonction des compétences communes
  let competencesCommunes = offre.competences.filter(c => demandeur.competences.includes(c));
  score += 5 * competencesCommunes.length;

  // Calcul du score en fonction de l'expérience
  if (demandeur.anneesExperience >= offre.anneesExperience) {
    score += 2 * demandeur.anneesExperience;
  }

  // Si le diplôme ne correspond pas, le score est multiplié par 0
  if (demandeur.diplome !== offre.diplome) {
    score *= 0;
  }

  return score;
}
*/

function calculerScoreDemandeur(offre, demandeur) {
    let score = 0;
    
    // Ajouter 5 points pour chaque compétence commune
    demandeur.competences.forEach(comp => {
      if (demandeur.competences.includes(competence)) {
        score += 5;
      }
    });
    
    // Ajouter 2 points pour chaque année d'expérience supérieure ou égale à l'offre
    if (demandeur.anneesExperience >= offre.anneesExperience) {
      score += 2 * demandeur.anneesExperience;
    }
    
    // Multiplier le score par 0 si le diplôme ne correspond pas
    if (demandeur.diplome !== offre.diplomeRequis) {
      score *= 0;
    }
    
    return score;
  }
const scoreDemandeur = calculerScoreDemandeur(offre, demandeur);
console.log("Score du demandeur :", scoreDemandeur);  

  function calculerScoreOffre(demandeur, offre) {
    let score = 0;
    
    // Ajouter 5 points pour chaque compétence commune
    demandeur.competences.forEach(comp => {
      if (offre.competences.includes(competence)) {
        score += 5;
      }
    });
    
    // Ajouter le rapport salairePropose / 100 au score
    score += Math.floor(offre.salairePropose / 100);
    
    // Multiplier le score par 0 si le diplôme ne correspond pas
    if (demandeur.diplome !== offre.diplomeRequis) {
      score *= 0;
    }
    
    return score;
  }
const scoreOffre = calculerScoreOffre(demandeur, offre);
console.log("Score de l'offre :", scoreOffre);



         
  </script>
</body>
</html>