/* 
 Lors de la validation du formulaire,
        l’internaute aura obligatoirement sélectionné le nom d’un chat 
        pour que celui-ci soit validé. 
                //....Stopper la redirection à SUBMIT,
                    ..Rendre le champs obligatoire 
                        (récupération et vérification ie. REQUIRED + ...)

        La zone de texte quant à elle devra contenir au minimum 15 caractères. 
                //....MIN-LENGTH (REQUIRED)

        En cas de non-validation des champs, 
        les bordures de ceux-ci deviennent rouge.
                //....Alert
        
        Par ailleurs, lorsqu’un champ change, 
        sa bordure reprendra sa couleur par défaut.
                //....Réinitialiser les Alerts 

        Bonus :  Remplacer le formulaire par un message de confirmation si les champs sont valides.
                //....Si MonFormulaireEstValide faire un "replace(this).with('MessageDeConfirmation')"
*/



$(function () {
    $("#adoptionForm").submit(function (e) {

        // Stopper la redirection HTML.
        e.preventDefault();

        // Réinitialiser les erreurs
        $('#adoptionForm .has-error').removeClass('has-error');
        $('#adoptionForm .help-block').remove();
        $('#adoptionForm .alert-danger').remove();

        // Récupération des champs du Formulaire
        const nomDuChatChoisi = $('#dropdownMenuLink');
        const raisonDuChoix   = $('#message');


       //.......... id="dropdownMenuLink"
       //.......... id="message"
       //......... 


        // !!!!!!!!!!!!!!!!! 
        // Fonction manquante
        // !!!!!!!!!!!!!!!!!!!!!
        if (raisonDuChoix.val().length < 15){
            raisonDuChoix.parent().addClass('has-error');
            $("<p class='help-block'>Votre message est trop court.</p>").appendTo(raisonDuChoix.parent());
        }
        else {
            raisonDuChoix.parent().addClass('has-success');  
        }

        if (nomDuChatChoisi.val() === 0){
            nomDuChatChoisi.parent().addClass('has-error');
            $("<p class='help-block'>Veuillez sélectionnez un chat!</p>").appendTo(nomDuChatChoisi.parent());
        }
        else {
            nomDuChatChoisi.parent().addClass('has-success');  
        }



       if( $(this).find('.has-error').length === 0 ) {

       $(this).replaceWith(`
        <div class="alert alert-success">
            Merci! Nous avons bien reçu votre message.<br>
            Nous vous contacterons dès que possible.
        </div>
        `);

        $('#contact').submit();

        } else {

            $(this).prepend(`
                <div class="alert alert-danger">
                    Veuillez vérifiez les informations!
                </div>
            `);

        }
    });
});
