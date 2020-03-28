
function traiterClicB1()
{
    
    $.get("reponseServeur.php",traiterReponseDemande01);
}

function traiterReponseDemande01(donnees)
{
    console.log(donnees);

    $("#unMessage").html(donnees);
}


function traiterClicB2()
{
    $.get("reponseServeurDelai.php",{delai:3},traiterReponseDemande02);
}

function traiterReponseDemande02(donnees)
{
    console.log(donnees);

    $("#unMessage").html(donnees);
}



function traiterClicB3()
{
    $.get("reponseServeurJSON.php",{delai:3},traiterReponseDemande03);
}

function traiterReponseDemande03(donnees)
{
    // Affichage pour comprendre la structure (similaire var_dump en php)
    console.log(donnees);

    // Accès à une donnée particulière :
    console.log("\nAcces à la case 2 du tableau :")
    console.log(donnees[2]);

   // Accès à une donnée particulière :
   console.log("\nAcces à la case 'profession' du tableau contenu dans la case 2 : ")
   console.log(donnees[2]['profession']);
}



