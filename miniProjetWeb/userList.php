<?php
    session_start();
    if($_SESSION['droits']=="admin")
    {
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
    <body>
        <table class = "table">
            <thead>
                <th>Login</th>
                <th>Droits</th>
                <th>Changer les droits</th>
                <th>Supprimmer</th>
            </thead>
            <tbody id="tableau">

            </tbody>
        </table>
        <script>
            $.get("getUserList.php",affiche);

            function affiche(list){
                console.log(list);
                document.getElementById("tableau").innerHTML="";
                for(var log in list){
                    document.getElementById("tableau").innerHTML+="<tr id = 'ligne_"+list[log]["idUtil"]+"'><td>"+list[log]["idUtil"]+"</td><td>"+list[log]["droits"]+
                    ((list[log]["droits"]!="admin")?"</td><td id='upgrade"+list[log]["idUtil"]+"'><input type='button' class = 'btn btn-dark' value='Passer Admin' onclick=upgrade('"+list[log]["idUtil"]+"');></input>":"</td><td>")+
                    "</td><td><input type='button' class = 'btn btn-dark' value='supprimer' onclick=supprime('"+list[log]["idUtil"]+"');></input></td></tr>";
                }
            }
            function supprime(id){
                console.log("suppression de l'element: " + id + "...");
                if(confirm("Voulez vous vraiment supprimer le compte et tous les tickets de "+id+"?\n Cette operation est irreversible."))
                $.get("removeUser.php",{login:id},reloadSup);
            }

            function reloadSup(donnee){
                if(donnee==0){
                    console.log("Impossible de supprimer son propre compte administrateur.")
                }else{
                    if(donnee==-1){
                        console.log("Privileges insuffisants")
                    }else {
                        document.getElementById("ligne_"+donnee).innerHTML="";
                        console.log("ligne " + donnee + " supprimee.");
                    }
                }
            }

            function upgrade(id){
                if(confirm("Voulez vous vraiment donner les droits administareur a "+id+"?\n Cette operation est irreversible."))
                    $.get("setAdmin.php",{login:id},reloadUp);
            }
            function reloadUp(donnee){
                document.getElementById("upgrade"+donnee).innerHTML="";
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
<?php
    }
    else{
        echo "acces refusé";
    }
?>