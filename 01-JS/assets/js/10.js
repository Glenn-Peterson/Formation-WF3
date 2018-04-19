/*
 I. Créer un Tableau 3D "PremierTrimestre" contenant la moyenne d'un étudiant pour plusieurs matières.
    Nous auront donc pour un étudiant, sa moyenne à plusieurs matières.
    
    Par exemple : Hugo LIEGEARD : [ Francais : 12, Math : 19, Physique 4], ... etc
    
    **** Vous allez créez au minimum 5 étudiants ****
II. Afficher sur la page (à l'aide de document.write) pour chaque étudiant, la liste (ul et li) de sa moyenne à chaque matière, puis sa moyenne générale. 
*/

/**
 * 1 je crée une liste d'étudiants (au moins 5)
 *      1a pour chaque étudiant je crée une liste de matiere
 *      1b pour chaque matiere de chaque étudiant j'attribue une moyenne
 */

/* var PremierTrimestre = [
    {
        prenom: "Glenn",
        nom: "PETERSON",
        moyenne: {
            francais: 10,
            anglais: 12,
            math: 8,
            phylo: 2
        }
    },
    {
        prenom: "Marc",
        nom: "LEGRAND",
        mmoyenne: {
            francais: 8,
            espagnol: 14,
            math: 10,
            physique: 4
        }
    },
    {
        prenom: "Tom",
        nom: "POUCE",
        moyenne: {
            francais: 11,
            anglais: 14,
            math: 8,
            sport: 4
        }
    },
    {
        prenom: "George",
        nom: "DELAJUNGLE",
        mmoyenne: {
            francais: 6,
            anglais: 8,
            sport: 18,
            math: 4
        }
    },
    {
        prenom: "Antoine",
        nom: "DUPUIS",
        moyenne: {
            francais: 14,
            anglais: 13,
            math: 12,
            physique: 7
        }
    }
];
console.log(PremierTrimestre);



// 2 je fais le calcul de moyenne générale pour chaque étudiant

var moyenneGeneraleGlenn, moyenneGeneraleMarc, moyenneGeneraleTom, moyenneGeneraleGeorge, moyenneGeneraleAntoine, nb1, nb2, nb3, nb4, nb5;

nb1= 10; nb2= 12; nb3= 8; nb4= 2; nb5= 4;
moyenneGeneraleGlenn = (nb1+ nb2+ nb3+ nb4)/nb5;                   
nb1= 8; nb2= 14; nb3= 10; nb4= 4; nb5= 4;
moyenneGeneraleMarc = (nb1+ nb2+ nb3+ nb4)/nb5;
nb1= 11; nb2= 14; nb3= 8; nb4= 4; nb5= 4;
moyenneGeneraleTom = (nb1+ nb2+ nb3+ nb4)/nb5;
nb1= 6; nb2= 8; nb3= 18; nb4= 4; nb5= 4;
moyenneGeneraleGeorge = (nb1+ nb2+ nb3+ nb4)/nb5;
nb1= 14; nb2= 13; nb3= 12; nb4= 7; nb5= 4;
moyenneGeneraleAntoine = (nb1+ nb2+ nb3+ nb4)/nb5;
console.log(moyenneGeneraleGlenn);
console.log(moyenneGeneraleMarc);
console.log(moyenneGeneraleTom);
console.log(moyenneGeneraleGeorge);
console.log(moyenneGeneraleAntoine);



// 3 je fais apparaitre sur la page


for(let i = 0; i < PremierTrimestre.length; i++){
    console.log(PremierTrimestre[i]);
}


var j = 0;
while(j <PremierTrimestre[0].moyenne.length){
    console.log(PremierTrimestre[0].moyenne[j]);
    j++;
}
/**
* @param {string} prenom
* @param {string} nom






document.write(prenom, nom, j) */












//    CORRECTION  


var PremierTrimestre = [
    {
        prenom  : "Hugo",
        nom     : "LIEGEARD",
        moyenne : {
            francais    : 4,
            math        : 7,
            physique    : 4,
            gestinfq    : 18,
            musique     : 19
        }
    },
    {
        prenom  : "Salim",
        nom     : "SOUMARE",
        moyenne : {
            francais    : 4,
            math        : 12,
            physique    : 10,
            anglais     : 15
        }
    },
    {
        prenom  : "Rachma",
        nom     : "SALIM",
        moyenne : {
            francais    : 12,
            math        : 11,
            anglais     : 16,
            espagnol    : 16,
            philo       : 14,
        }
    },
    {
        prenom  : "Ousmane",
        nom     : "MAMA",
        moyenne : {
            francais    : 8,
            math        : 13,
            anglais     : 16,
            espagnol    : 16,
            philo       : 6,
        }
    },
    {
        prenom  : "Cheffia",
        nom     : "BENALLAL",
        moyenne : {
            francais    : 12,
            math        : 11,
            anglais     : 13,
            allemand    : 12,
            latin       : 10
        }
    },
];

console.log(PremierTrimestre);

// -- Les Flemards.js

function l(e) {
    console.log(e);
}

function w(e) {
    document.write(e);
}

// -- Je souhaite afficher la liste de mes étudiants
w('<ol>');
for(let i = 0 ; i < PremierTrimestre.length; i++){

    let Etudiant = PremierTrimestre[i];
    // l(Etudiant);

    var SommeDesNotes = 0, NombreDeMatiere = 0;

    w('<li>');
        w(Etudiant.prenom + ' '+ Etudiant.nom);
        w('<ul>');
            //-- Afficher les matieres d'un étudiant (avec sa moyenne)
            for(let matiere in Etudiant.moyenne){
                // l(matiere);
                w('<li>');
                    w(matiere + ' :' + Etudiant.moyenne[matiere]);
                w('</li>');
                SommeDesNotes += Etudiant.moyenne[matiere];
                NombreDeMatiere++;
                
            } // Fin de la boucle matiere

            w('<li>');
                w('<strong>Moyenne Générale : </strong>' + (SommeDesNotes / NombreDeMatiere).toFixed(2));
            w('</li>');

        w('</ul>')
    w('</li>');
}
w('</ol>');
