/*function afficher_CV()
{
var nomPrenom = document.formCV.nom.value;
var dateNaissance = new Date(document.formCV.dateNaissance.value);
let dateLocale = dateNaissance.toLocaleString('fr-FR',{weekday: 'long', year: 'numeric', month: 'long',  day: 'numeric'});

//pour les Radio Box
let listeR = document.getElementsByName('etatCivil');
// ou bien let listeR = document.formCV.etatCivil;
let etatCivil=""
for (let i = 0; i < listeR.length; i++) {
    if (listeR[i].checked) 
        etatCivil = listeR[i].value;
}

let nbEnfants= Number(document.formCV.nbEnfants.value);
let adresse = document.formCV.adresse.value;

var infosPerso ="je m'appelle ";
infosPerso += nomPrenom;
infosPerso +=" je suis né le  ";
infosPerso += dateLocale;
infosPerso += ". Je suis " + etatCivil;

if (nbEnfants== 1) 
infosPerso += " et j'ai " + nbEnfants + " enfant \r\n";
else if (nbEnfants>1)
    infosPerso += " et  j'ai  " + nbEnfants + " enfants.  \r\n";

infosPerso += "J'habite au " + adresse;

// traitement des éléments correspondants au cursus
//pour les listes select à choix unique
let selectUniversite = document.getElementById('universite');
let universite = selectUniversite[selectUniversite.selectedIndex].value;

//pour les CHKList
let listeCHK = document.getElementsByName('diplomes');
let listeDiplomes = "";
for (let i = 0; i < listeCHK.length; i++) {
    if (listeCHK[i].checked) 
        listeDiplomes += listeCHK[i].value + ' ';
}

var infosCursus ="j'ai étudié à l'université de " + universite ;
infosCursus += " et j'ai obtenu les diplomes de " + listeDiplomes;


let select = document.getElementById('competences');
    listeComp = "";
    for (let i=0; i<select.length; i++) {
        if (select[i].selected) {
            listeComp += select[i].value + '  ';		// value pour récupérer la valeur 
           // listeComp += ' (Texte HTML : ' + select[i].text + ')';   } // text pour récupérer le texte affiché
        }
    }

infosCursus += "\r\n et j'ai acquis les compétences suivantes : " + listeComp ;

let fichierCV = document.getElementById("fichier").value;

// affichage du CV sous forme de paragraphes
para1= document.getElementById('#p1');
// Whitespace is preserved by the browser. Text will only wrap on line breaks. Acts like the <pre> tag in HTML
para1.setAttribute('style', 'white-space: pre;'); 

para1.textContent= infosPerso;

para2= document.getElementById('#p2');
// Whitespace is preserved by the browser. Text will only wrap on line breaks. Acts like the <pre> tag in HTML
para2.setAttribute('style', 'white-space: pre;'); 

para2.textContent= infosCursus;

 
para3= document.getElementById('#p3');
para3.textContent = " Vous trouvez mon CV dans le fichier " + fichierCV + " ci joint"

};
/*
function afficher_CV(){
    var name = document.formCV.nom.value;
    var date = document.formCV.dateNaissance.value;
    var adr = document.formCV.adresse.value;
    document.querySelector("#p1").innerHTML = "Bonjour je m'appelle " +name +" je suis né en "+ date 
    +" mon adresse est "+adr;
}*/
/*
let formulaire = document.getElementById('form1');
formulaire.addEventListener('submit',function(e){
  
    let name=document.getElementById("nom");
    let age=document.getElementById("age");
    let mail = document.getElementById("mail");

    let regExNom=/^[a-zA-Z\s]+$/;
    let regExEmail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
    let myError=document.getElementById('erreur');
    myError.style.color='red';
    
    // controle du nom
    if (name.value.trim()=='')
    {	e.preventDefault();
		myError.innerHTML='Le champ nom est requis';
		myError.style.color='red';
		
    }
    else if(regExNom.test(name.value)==false){

		myError.innerHTML="Le champ nom doit être composé de lettres ou d'espaces";
		e.preventDefault();
    }
    

    //controle de l'age
     if (age.value.trim()=='')
    {	
		myError.innerHTML='Le champ age est requis';
		e.preventDefault();
    }
    else
	    if(Number(age.value)>120   || Number(age.value) < 16 ){
			myError.innerHTML="veuillez saisir un age valide";
			e.preventDefault();
	    }

    //controle de l'email
    if (mail.value.trim()=='')
    {	
		myError.innerHTML='Le champ Email est requis';
		e.preventDefault();
    }
    else 
      if(regExEmail.test(mail.value)==false){
		myError.innerHTML="L'adresse email n'est pas valide";
		e.preventDefault();
      }
 //controle des compétences
 
 let select = document.getElementById('competences');
    listeComp = "";
    for (let i=0; i<select.length; i++) {
        if (select[i].selected) {
            listeComp += select[i].value + '  ';		
        }
    }

  if (listeComp.trim()=='')
    {	
		myError.innerHTML='Veuillez saisir au moins une compétence';
		e.preventDefault();
    }
}
    )




let forl = document.getElementById('bh');
forl.addEventListener('submit',function(e){
let name=document.getElementById("nom");
let mail = document.getElementById("mail");

let regExNom=/^[a-zA-Z\s]+$/;
let regExEmail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
let myError=document.getElementById('erreur');
    myError.style.color='red';
if (name.value.trim()=='')
    {	
		myError.innerHTML='Le champ nom est requis';
		myError.style.color='red';
		e.preventDefault();
    }
    else if(regExNom.test(name.value)==false){

		myError.innerHTML="Le champ nom doit être composé de lettres ou d'espaces";
		e.preventDefault();
    }
    if (mail.value.trim()=='')
    {	
		myError.innerHTML='Le champ Email est requis';
		e.preventDefault();
    }
    else if(regExEmail.test(mail.value)==false){
		myError.innerHTML="L'adresse email n'est pas valide";
		e.preventDefault();
      }
}

)*/
var username=document.forms['myfrom']['username'];
 var error = document.getElementById('error');
 function validation()
 {
    if(username.value =='')
    {
       error.innerHTML="username muct be filled .........!!!!";
       error.style.display="block";
        return false;
    }
    return true;
 };