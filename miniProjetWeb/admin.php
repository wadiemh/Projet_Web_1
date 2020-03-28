<?php
session_start();
if($_SESSION["droits"]=="admin"){
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
    
   


  
    
    <br />
    <header>
	
	 
       <div style="text-align:center;" >
	    <span>
        <img height="50" src="LOGO\LOGO WITHOUT TEXT.PNG" alt="3il logo">
        </span>
		<span>
            <h3 class="font-weight-light" style="color: black;" >Admin page</h3>
       </span>
        </div>
    
        
		 <br />
    <br />
        <table class = "table">
            <thead>
                <th>Id</th>
                <th>User</th>
                <th>Etat</th>
                <th>Date d'ouverture</th>
                <th>Message</th>
                <th>Traiter</th>
            </thead>
            <tbody id="tableau">

            </tbody>
        </table>

        <script>
            $.get("getTicketList.php",{etat:"tous"},affiche);
            function affiche(list){
                document.getElementById("tableau").innerHTML="";
                console.log("affichage");
                for(var ligne in list){
                    document.getElementById("tableau").innerHTML+="<tr><td>"+list[ligne]["numTicket"]+"</td><td>"+list[ligne]["idUtil"]+
                    "</td><td>"+list[ligne]["etat"]+"</td><td>"+list[ligne]["dateOuverture"]+"</td><td>"+list[ligne]["message"]+
                    (list[ligne]["etat"]!='fermé'?
                        "</td><td><input type='button' class='btn btn-dark' value='Click' onclick=traiter('"+list[ligne]["numTicket"]+"');></input></td></tr>"
                     :
                        "</td><td></td></td></tr>");
                }
            }

			function traiter(id){
				console.log(id);
				window.location.replace("traiterTicket.php?id="+id);
			}
        </script>
		<footer>
        <div style="text-align:center;">
            
			<a class="p-3 mb-2 bg-gradient-light text-dark" href="./"><input class="btn btn-dark" value = "Revenir"  type="button"></a>
        </div>
    </footer>
	
    </body>

</html>

    <?php
}else{
    echo "Droits insuffisants";
    header("location: ./");
}
?>