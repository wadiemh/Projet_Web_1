<?php
require_once "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Acceuil</title>
        <script src='js/jquery-3.4.1.min.js'></script>
        <script src='js/07_jquery_base.js'></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
	<body class="container">
    <style>
      p {
            color: chocolate;
            font-size: 20px;
        }
		.jumbotron{
			background-color:#fff2e6;
			color=white;
		}
    </style>
    <div class="page-header">
        <img height="100" src="3il.png" alt="3il logo">
    </div>
    <hr />
    
  
    

   
    <br />
    <br />
    <header>
        <div style="text-align:center;" >
		  <span>
        <img height="50" src="LOGO\LOGO WITHOUT TEXT.PNG" alt="3il logo">
    </span>
            <h3 class="font-weight-light" style="color: black;" >Bienvenue</h3>
       
        </div>
		
    <br />
		
    </header>
    <main  class="container " style="text-align:center;">
	      <?php
            if(isset($_SESSION["login"])){
                if($_SESSION["droits"]=="admin"){
                    ?>
					
                        <hr />
                        <br>
                        <form action="admin.php", method = "post">
                            <input class="btn btn-dark" type = "submit", value="Gestion des réclamations">
                        </form> 
						<hr />
                        <br>
                        <form action="userList.php", method = "post">
                            <input class="btn btn-dark" type = "submit", value="Gestion des utillisateurs">
                        </form> 
						<hr /> <hr />
                        <br>
                        <form action="insertion_tickets.php", method = "post">
                            <input class="btn btn-dark" type = "submit", value="Tickets de réclamation">
                        </form> 
						<hr />
                        <br>
                        <form action="SHOW_user.php", method = "post">
                            <input class="btn btn-dark" type = "submit", value="Consulter votre Tickets">
							<hr />
                        </form> 
						<br>
                        <form action="show_reponse.php", method = "post">
                            <input class="btn btn-dark" type = "submit", value="Consulter les reponses">
                        </form>
						<hr />
                    <?php
                }else{
                    ?>
                        
                        <br>
                        <form action="insertion_tickets.php", method = "post">
                            <input class="btn btn-dark" type = "submit", value="Déposer Tickets">
                        </form> 
						<hr />
                        <br>
						<form action="SHOW_user.php", method = "post">
                            <input class="btn btn-dark" type = "submit", value="Consulter votre Tickets">
							<hr />
                        </form> 
						<br>
                        <form action="show_reponse.php", method = "post">
                            <input class="btn btn-dark" type = "submit", value="Consulter les reponses">
                        </form>
						<hr />

                    <?php
                }
                ?>  <br><br>
                    <form action="deco.php">
                        <input class="btn btn-dark" type = "submit", value="Déconnexion">
                    </form>
                <?php
            }else{
                ?>
				
                <form action="connexion.php" , method = "post">
                    <input class="btn btn-light" type = "text", placeholder ="Identifiant", name = "login">
                    <input class="btn btn-light" type ="password", placeholder ="Mot de passe", name = "pass">
                    <br>
                    <input class="btn btn-dark" type = "submit", value = "Connexion">
					 
                </form>
				<hr/>
				<p class="font-weight-light">Vous avez pas de compte ?</p>
		          <form action="insert_User.php" method = "post" id = "adding" >
                    <input class="btn btn-light" type = "text", placeholder ="Identifiant", name = "loginn">
					<br>
                    <input class="btn btn-light" type ="password", placeholder ="Mot de passe", name = "passs">
                    <br>
                    <input class="btn btn-warning" type = "submit", value = "S'enregestrer">
					 
                  </form>

                <?php   
            }
        ?>
		          
		          
		<hr />
    </main>
    <footer >
        <div style="text-align:center;" >
		
            <p class="font-weight-light">A Propos</p>
        </div>
    </footer>
		<script> 
	jQuery(document).ready(function () {

    $("#adding").submit(function (e) {
        e.preventDefault();//to not refresh the page
        var entrer = $(this).serialize();
        $.post("insert_User.php", entrer,function(){
		$("#adding")[0].reset();
		console.log("test");
		});

    });
});
</script>

</body>
</html>
