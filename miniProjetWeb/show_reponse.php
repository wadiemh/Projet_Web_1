<?php
session_start();
require_once 'db.php';
if(!isset($_SESSION['login'])){
	die("connectez vous !");
}
if(!isset($_SESSION['login'])){
	die("connectez vous !");
}
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
	 <div class="page-header">
        <img height="100" src="3il.png" alt="3il logo">
    </div>
    <hr />
 
 
    <header>
        <div style="text-align:center;" >
		  <span>
        <img height="50" src="LOGO\LOGO WITHOUT TEXT.PNG" alt="3il logo">
    </span>
           
       
        </div>
		
    <br />
        <table class = "table">
            <thead>
                <th>Id</th>
                <th>Message</th>
                <th>reponse</th>
                <th>Details</th>
            </thead>
            <tbody id="tableau">

            </tbody>
        </table>

        <script>
            $.get("get_reponse.php",affiche);

            function affiche(list){
                document.getElementById("tableau").innerHTML="";
                console.log("affichage");
                for(var ligne in list){
                    document.getElementById("tableau").innerHTML+="<tr><td>"+list[ligne]["numTicket"]+"</td><td>"+list[ligne]["message"]+
                    "</td><td>"+list[ligne]["reponse"]+"</td><td><input class='btn btn-dark' type='button' value='Consulter' onclick=details('"+ list[ligne]["numTicket"]+"');></input></td></tr>";
                }
            }
            function details(id){
                console.log(id);
                window.location.replace("details_reponse.php?id="+id);
            }
        </script>
		  <footer>
	<hr/>
        <div style="text-align:center;">
           
			<a class="p-3 mb-2 bg-gradient-light text-dark" href="./"><input class="btn btn-dark" value = "Revenir"  type="button"></a>
        </div>
		<br>
		<br>
		<br>

    </footer>
    </body> 

</html>