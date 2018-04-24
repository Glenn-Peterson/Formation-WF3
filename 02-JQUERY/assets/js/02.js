/*-----------------------------------
        LES SELECTEURS JQUERY
-----------------------------------*/

// -- Format : $('selecteur')
// -- En jQuery, tous les selecteurs CSS sont disponibles...

$(function() {

    l = e => console.log(e);

    // -- Sélectionner toutes les balises SPAN
    l(document.getElementsByTagName('span'));
    l($('span'));

    // -- Sélectionner mon menu grace à son ID
    l(document.getElementById('menu'));
    l($('menu'));

    // -- Sélectionner un élément par sa classe...
    l(document.getElementsByClassName('MaClasse'));
    l($('.MaClasse'));

    // -- sélectionner un Attribut
    l($('[href="#"]'));

});
