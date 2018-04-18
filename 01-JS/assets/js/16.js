// -- 1 je vérifie (EN TEMPS REEL) avec "événement" que le pseudo saisi N'EXISTE PAS dans le tableau de membres
        // -- 1a. creer une ecoute sur le champ pseudo en temps reel (= a chaque "keyup"?? ou avec "input"??)
            // -- 1b. comparer la saisi avec la liste des membres 
                // -- 1c. si le pseudo existe deja, afficher notification "pseudoError" et déactiver le boutton "submit"
                // -- 1d. si le pseudo n'existe pas (!negative), ou est corrigé le bouton "submit" est ACTIF et pas de notification pseudoError (retirer notification)


// -- 2 je vérifie l'age saisi ()
        // -- 2a. si Moins de 18 ans alors afficher notification ageError et déactiver le bouton submit
        // -- 2b. si 18 ans ou plus (ou age coriger) pas de notification ageError et bouton submit actif


// -- 3 j'affiche (en temps réel) dans "titre id "Bienvenue" : Bonjour [Pseudo]" (Pseudo = saisie en cours) (?? CONFLIT avec pseudoError??)


// -- 4 quand clic sur "m'inscrire" (evenement "click")
        // -- 4a. ajouter les infos saisi (pseudo, age, email, mdp) dans le tableau 
                /*  */
        // -- 4b. afficher sur la page un message de bienvenue
        // -- 4c. afficher la liste des membres (pseudos) en liste non-ordonnée (ul) (!!Du tableau réactualisé avec les nouvelles infos!!)
