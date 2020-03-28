<?php
session_start();
require_once 'db.php';

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
    <body class="container">
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
    </header>
        <table class = "table">
            <thead>
                <th>Id</th>
                <th>Etat</th>
                <th>Date d'ouverture</th>
                <th>Message</th>
				<th>Action</th>
                
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
                    document.getElementById("tableau").innerHTML+="<tr id='tabLigne_"+list[ligne]["numTicket"]+"'><td>"+list[ligne]["numTicket"]+
                    "</td><td>"+list[ligne]["etat"]+"</td><td>"+list[ligne]["dateOuverture"]+"</td><td>"+list[ligne]["message"]+
                    ((list[ligne]["etat"]=="fermé")?
                        "</td><td><input type='button' class='btn btn-dark' value='Consulter' onclick=consulter('"+list[ligne]["numTicket"]+"');></input>"
                    :
                        ((list[ligne]["etat"]=="ouvert")?
                        "</td><td><input type='button' class='btn btn-dark' value='Supprimer' onclick=supp('"+list[ligne]["numTicket"]+"');></input>"
                    :
                        "</td><td>"))
                    +"</td></tr>";
                }
            }

            function consulter(id){
                window.location.replace("details_reponse.php?id="+id);
            }
            function supp(id){
                if(confirm("Voulez etes sur le point de supprimer le ticket n°"+id+" .\nAppuyez sur OK pour confirmer.\nCette operation est irréversible.")){
                    console.log("suppression de la ligne "+id+" ...");
                    $.get("delete_ticket.php",{numTicket:id},reloadSup);
                }else{
                    console.log("Suppression annulée.");
                }
            }
            function reloadSup(donnee){
                if(donnee==-1){
                    console.log("Impossible de supprimer")
                }else {
                    console.log("ligne " + donnee + " supprimee de la base...");
                    document.getElementById("tabLigne_"+donnee).innerHTML="";
                    console.log("ligne " + donnee + " supprimee de l'affichage.");
                }
            }
		</script>
		
		  <footer>
		  
	<hr/><br><br>
        <div style="text-align:center;">
           
			<a class="p-3 mb-2 bg-gradient-light text-dark" href="./"><input class="btn btn-dark" value = "Revenir"  type="button"></a>
        </div>
		<br>
		<br>
		<br>

    </footer>
			
	
    </body>

</html>