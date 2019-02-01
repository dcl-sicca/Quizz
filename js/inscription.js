// apparition fenetre modale au clic sur image ?
var interro3 = document.getElementById('interro3');
var modal3 = document.getElementById('modal3');

interro3.addEventListener('mouseover',function(){
    interro3.src = "img/speech-bubble-over.png";
});

interro3.addEventListener('mouseout',function(){
    interro3.src="img/speech-bubble.png";
});



interro3.addEventListener('click',function(){
    if(modal3.style.display == 'none'){
        modal3.style.display = 'block';
    } else {
        modal3.style.display = 'none';
    }
});
modal3.addEventListener('click', function(){
    modal3.style.display = 'none';
});



// ------------- vérification du formulaire -----------------------

// changement couleur de fond si saisie incorrect
function surligne(champ, erreur) {
    if(erreur){
       champ.style.backgroundColor = "#fba";
       champ.style.color = "#712727";
     } else {
       champ.style.backgroundColor = "";
       champ.style.color = "white";
     }
 }

// nom ou prénom sans chiffre ou  caractères spéciaux
function verifNom(champ){
    for(var i = 0; i < champ.value.length; i++){
        var lettre = champ.value[i];
        var regex = /^[a-zA-Z ]*$/;
        if(!regex.test(champ.value)){    
            surligne(champ, true);
            return true;
        } else {
            surligne(champ, false);
            return false;  
        }
    }  ;
};
// verification email
function verifMail(champ){
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if(!regex.test(champ.value)){
     surligne(champ, true);
     return false;
    } else {
     surligne(champ, false);
     return true;
    }
 } ;  


// verification mot de passe
// contient majuscule, minuscule, chiffre, et caractères spéciaux
var psw;
function verifPsw(champ){
    psw = champ.value;
    for(var i = 0; i < champ.value.length; i++){
        var lettre = champ.value[i];
        var reg = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)/;
        if(!reg.test(champ.value)){    
            surligne(champ, true);
        } else {
            surligne(champ, false);  
        }
    }  ;
    return psw;
};
// les 2 mots de passe sont identiques
function verifPsw2(champ){     
        if(champ.value != psw){  
            champ.value = "";
            champ.placeholder = "mot différent";  
            surligne(champ, true); 
        } else {
            surligne(champ, false);    
        }
};

// vérification du select au moment du submit
var activite = document.getElementById('activite');

function verifForm(){
    
        if(activite.value == 0){
            surligne(activite, true);
            return false;
        } else {
            surligne(activite, false);
            return true;
        }
};

// fenetre modale de réponse
// var reponse = document.getElementById('reponse');

//     if (!reponse.html.length){
//         reponse.style.display = 'none';
       
//     } else {
//         reponse.style.display = 'block';
        
//     };
    
