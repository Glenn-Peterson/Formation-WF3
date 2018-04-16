/* -------------------------------------
            LES CONDITIONS
------------------------------------- */

/** var MajoriteLegaleFR = 18;

if(14 >= MajoriteLegaleFR) {
    alert("Bienvenue !");
// -- Le else n'est pas OBLIGATOIRE
} else {
    alert("Google...");
} **/

/* -------------------------------
          EXERCICE 
Créer une fonction permettant de vérifier l'age d'un visiteur (prompt).
S'il a la majorité légale, alors je lui souhaite la bienvenue, 
sinon, je fait une redirection sur Google après lui avoir signalé le soucis.
-------------------------------- */

/* var MajoriteLegaleFR = 18;

let age = parseInt(prompt("Bonjour quel est votre age ?", "<Saisir votre age>"));
console.log(age);
console.log(typeof age);

if(age >= MajoriteLegaleFR) {
    alert("Bienvenue !");
}
else {
    alert("Vous n'avez pas l'age légale");
    document.location.href="https://www.google.fr"; 
} */



// CORRECTION !!!
// -- 1. Déclarer la Majorité Légale
/* var MajoriteLegaleFR = 18;

// -- 2. Créer une fonction pour vérifier son age.

/**
 * Retourne VRAI si majeur.
 * FAUX sinon.
 * @param {Number} age 
 */
/*function estMajeur(age) {
    if(age >= MajoriteLegaleFR) {
        return true;
    } else {
        return false;
    }
}

// -- 3. Je demande à l'utilisateur son age
var ageSaisieParMonUtilisateur = parseInt(prompt("Bonjour, Quel age avez-vous ?","<Saisissez votre Age>"));

// -- 4. Vérification de l'age du visiteur....
if( estMajeur(ageSaisieParMonUtilisateur) ) {

    // -- 4a. J'affiche un message de bienvenue
    alert('Bienvenue sur mon site internet réservé aux majeurs...');
    document.write("0_0 !!!");

} else {
    
    // -- 4b. J'effectue une redirection
    document.location.href = "http://fr.lmgtfy.com/?q=Majorit%C3%A9+L%C3%A9gale+en+France";

}
 */


/*--------------------------------------------------\
|   LES OPERATEURS DE COMPARAISON                   |
|                                                   |
|                                                   |
|   L'Opérateur de comparaison " == " signifie:     |
|   Egal à. Il permet de vérifier que 2 variables   |
|   sont identiques.                                |
|                                                   |
|   L'Opérateur de comparaison " ===" signifie:     |
|   Strictement Egal à. Il va comparer la valeur,   |
|   mais aussi le type.                             |
|                                                   |
|   L'Opérateur de comparaison " !=" signifie:      |
|   Different de.                                   |
|                                                   |
|   L'Opérateur de comparaison " !==" signifie:     |
|   Strictement Différent de.                       |
|--------------------------------------------------*/

/* -------------------------------
            EXERCICE :
J'arrive sur un Espace Sécurisé au moyen 
d'un email et d'un mot de passe.
Je doit saisir mon email et mon mot de passe afin d'être authentifié sur le site.
En cas d'échec une alert m'informe du problème.
Si tous se passe bien, un message de bienvenue m'accueil.
-------------------------------- */

// // -- BASE DE DONNEES
/* var email, mdp;

email = "wf3@hl-media.fr";
mdp = "wf3";

function usermail(email) {
    if(email == email) {
        return true;
    } else {
        return false;
    }
}
function userpw(mdp) {
    if(mdp== mdp) {
        return true;
    } else {
        return false;
    }
}
var userid = (prompt("Vous êtes sur un espace sécurisé ","<Saisissez votre email>"),prompt("<Saisissez votre mot de passe>"));
/* @param {string} email
@param {string} mdp */

/*if( userid= usermail && userpw) {
    alert('Bienvenue sur le site');
    document.write("Bienvenue");
} else {
    alert('Identifiants Incorrects!!!');
} */




/* CORRECTION */

// // -- BASE DE DONNEES
var email, mdp;

email = "wf3@hl-media.fr";
mdp = "wf3";

/**
 * Vérifie l'identification d'un utilisateur
 * @param {string} emailPasseEnParam 
 * @param {string} mdpPasseEnParam 
 * @return {boolean}
 */
function monUtilisateurEstCorrect(emailPasseEnParam, mdpPasseEnParam) {

    if(emailPasseEnParam === email && mdpPasseEnParam === mdp) {
        return true;
    } else {
        return false;
    }

}

// -- 1. Demander à l'utilisateur son email
var emailUser = prompt("Bonjour, Quel est votre email ?", "<Saisissez votre Email>");

// -- 2. Demander son mot de passe
var mdpUser = prompt("votre mot de passe ?", "<Saisissez votre mot de passe>");

// -- 3. Vérifier si l'email et le mot de passe saisie par l'utilisateur correspond avec la BDD.
if(monUtilisateurEstCorrect(emailUser, mdpUser)) {
    // -- 3a. Si tout est ok, alors, BIENVENUE
    alert('Bienvenue ' + emailUser + ' !');
} else {
    alert('ATTENTION, email/mot de passe incorrect.');
    // -- 3b. Sinon, on affiche un message d'erreur.
}

// -- EXEMPLE SANS LES FONCTIONS

// // -- 1. Demander à l'utilisateur son adresse email
// var emailUser = prompt("Bonjour, Quel est votre email ?","<Saisissez votre email>");

// // -- 2. Je vérifie si l'email saisie (emailUser) correspond avec la BDD (email)
// if(emailUser === email) {
//     // -- 2a. Tous est ok, je continue la vérification avec le mot de passe...

//     // -- 2a1. On demande a l'utilisateur son mot de passe
//     var mdpUser = prompt("votre mot de passe ?","<Saisissez votre mot de passe>");

//     // -- 2a2. Vérification du mot de passe
//     if(mdpUser === mdp) {
//         alert('Bienvenue !');
//     } else {
//         alert("ATTENTION, nous n'avons pas reconnu votre mot de passe.");
//     }

// } else {
//     // -- 2b. Les emails ne correspondent pas...
//     alert("ATTENTION, nous n'avons pas reconnu votre adresse email.");
// }

    /* -------------------------------------------------------- *\
   /                 ~ LES OPERATEURS LOGIQUES ~                  \
  /_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ \
    |                                                           |
    |           ##### L'opérateur ET : && ou AND #####          |
    |                                                           |
    |   Si la combinaison email user et email correspond, ET    |
    |   la combinaise mdpuser et mdp correspond.                |
    |                                                           |
    |   --> Dans cette condition, les 2 doivent OBLIGATOIREMENT |
    |   correspondre pour être validée.                        |
    |   Ex. if(emailUser == email && mdpUser == mdp) {...}      |
    |                                                           |
    |           ##### L'opérateur OU : || ou OR #####           |
    |                                                           |
    |   Si la combinaison emailUser et email correspond ET/OU   |
    |   la combinaison mdpUser et mdp correspond.
    |                                                           |
    |   --> Dans cette condition, au moins l'une des deux       |
    |   doit correspondre pour être validée.                    |
    |   Ex. if(emailUser == email || mdpUser == mdp) {...}      |
    |                                                           |
    |        ##### L'opérateur " ! " ou encore NOT #####        |
    |                                                           |
    |   L'Opérateur "!" signifique le CONTRAIRE DE... ou NOT    |
    |                                                           |
    |   var monUtilisateurEstApprouve = true;                   |
    |   if(!monUtilisateurEstAppprouve) {...}                   |
    |   Mon Utilisateur n'est pas approuvé.                     |
    |                                                           |
    |   Reviens à écrire :                                      |
    |   if(monUtilisateurEstApprouve == false) {...}            |
    |                                                           |
    \*---------------------------------------------------------*/