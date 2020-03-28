<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "UTF-8">
        <title>Acceuil</title>
        <script src='js/jquery-3.4.1.min.js'></script>
        <script src='js/07_jquery_base.js'></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <table class = "table"> 
            <thead>
                <th>Id</th>
                <th>Etat</th>
                <th>Date d'ouverture</th>
                <th>Message</th>
                <th>Traiter</th>
            </thead>
            <tbody id="tableau">

            </tbody>
        </table>

        <script>
            $.get("getUserTicketList.php",affiche);

            function affiche(list){
                document.getElementById("tableau").innerHTML="";
                console.log("affichage");
                for(var ligne in list){
                    document.getElementById("tableau").innerHTML+="<tr><td>"+list[ligne]["numTicket"]+
                    "</td><td>"+list[ligne]["etat"]+"</td><td>"+list[ligne]["dateOuverture"]+"</td><td>"+list[ligne]["message"]+
                    "</td><td><input type='button' value='+' onclick=Traiter('"+list[ligne]["numTicket"]+"');></input></td></tr>";
                }
            }
        </script>
    </body>

</html>