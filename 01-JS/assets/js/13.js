 
/*---------------------------------------------------------*\
|                         LE DOM                            |
|-----------------------------------------------------------| 
|                                                           |
|   Le DOM est une interface de développement en JS pour    |
|   HTML. Grace au DOM, je vais etre en mesure d'acceder    |
|   ou modifier mon HTML.                                   |
|                                                           |
|   L'objet "document" : c'est le point d'entrée vers       |
|   mon contenu HTML.                                       |
|                                                           |
|   Chaque page chargée dans mon navigateur a un objet      |
|   "document".                                             |
\*---------------------------------------------------------*/    

/**
 * Comment puis-je faire pour récupérer
 * les différentes informations de ma page HTML ?
*/

/*-------------------------------------------------*\
| ~~~~~~~~~~~~~ document.getElementById ~~~~~~~~~   |
|---------------------------------------------------|
|   document.getElementById() est une fonction qui  |
|   va permettre de récuperer un élément HTML à     |
|   partir de son identifiant unique : ID           |
\*-------------------------------------------------*/

var bonjour = document.getElementById('bonjour');
console.log(bonjour);


/*--------------------------------------------------------*\
| ~~~~~~~~~~~~~ document.getElementByClassName ~~~~~~~~~   |
|----------------------------------------------------------|
|   document.getElementByClassName() est une fonction qui  |
|   va permettre de récupérer un ou plusieurs éléments     |
|   (une liste) HTML à partir de leur classe.              |
\*--------------------------------------------------------*/

var contenu = document.getElementsByClassName('contenu');
console.log(contenu);

// -- Me renvoi un tableau JS avec mes éléments HTML (Collection HTML).


/*---------------------------------------------------------*\
| ~~~~~~~~~~~~~ document.getElementByTagName ~~~~~~~~~      |
|-----------------------------------------------------------|
|   document.getElementByTagName() est une fonction qui     |
|   va permettre de récupérer un ou plusieurs éléments      |
|   (une liste) HTML à partir de leur * nom de balise *     |
\*---------------------------------------------------------*/

var span = document.getElementsByTagName('span');
console.log(span);