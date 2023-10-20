/*const offre = {
    competences :  ["oracle"],
    anneesExperience: 1,
    diplomeRequis: "license",
    salairePropose: 10000
  };
  
  // Exemple de demandeur d'emploi
  const demandeur = {
    competences: ["oracle"],
    anneesExperience: 1,
    diplome: "license"
  };
*/
/*
const offre = {
    competences : " <?= $competance ?>",
    anneesExperience: " <?= $experience ?>",
    diplomeRequis: "<?= $diplomas ?>" ,
    salairePropose: " <?= $salary ?>"
  };
  
  // Exemple de demandeur d'emploi
  const demandeur = {
    competences:  "<?= $competance ?>",
    anneesExperience: "<?= $experience ?>",
    diplome:  "<?= $diplomas ?>"
  };


function calculerScoreDemandeur(offre, demandeur) {
    let score = 0;
    
    // Ajouter 5 points pour chaque compétence commune
    demandeur.competences.forEach(comp => {
      if (demandeur.competences.includes(comp)) {
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
  //console.log("Score du demandeur :", scoreDemandeur);  
  function calculerScoreOffre(demandeur, offre) {
    let score = 0;
    
    // Ajouter 5 points pour chaque compétence commune
    demandeur.competences.forEach(comp => {
      if (offre.competences.includes(comp)) {
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
*/
window.addEventListener('load', () => {
  const names = localStorage.getItem('pseud');
  document.getElementById('result-name').innerHTML = names;})