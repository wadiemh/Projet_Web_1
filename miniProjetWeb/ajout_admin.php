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
				
		          <form action="insert_User.php" method = "post" id = "adding" >
                    <input class="btn btn-light" type = "text", placeholder ="Identifiant", name = "loginn">
					<br>
                    <input class="btn btn-light" type ="password", placeholder ="Mot de passe", name = "passs">
                    <br>
					<!--<input type="checkbox" name="check" value="on">-->
					<br>
                    <input class="btn btn-warning" type = "submit", value = "ADD">
					 
                  </form>

                <?php   
				}
            }
        ?>
		          
		          
		<hr />
    </main>
      <footer>
	
        <div style="text-align:center;">
           
			<a class="p-3 mb-2 bg-gradient-light text-dark" href="./"><input class="btn btn-dark" value = "Revenir"  type="button"></a>
        </div>
		<br>
		<br>
		<br>

    </footer>
		<script> 
	jQuery(document).ready(function () {

    $("#adding").submit(function (e) {
        e.preventDefault();//to not refresh the page
        var entrer = $(this).serialize();
        $.post("insert_Admin.php", entrer,function(){
		$("#adding")[0].reset();
		console.log("test");
		});

    });
});
</script>

</body>
</html>