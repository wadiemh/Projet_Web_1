<?php
require_once 'db.php'; //connection a la base de donnees
?>
<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
	<title>foyer WADIE 3IL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<head>
<body class="container">
    <style>
      p {
            color: chocolate;
            font-size: 20px;
        }
    </style>
    <dev>
        <img height="100" src="3il.png" alt="3il logo">
    </dev>
    <hr />
    
    <span>
        <img height="50" src="LOGO\LOGO WITHOUT TEXT.PNG" alt="3il logo">
    </span>
    <span >FOOD</span>
    <span>
        <img height="20" src="LOGO/FOOD ICON.png" alt="fooding icon">
    </span>

    <br />
    <br />
    <br />
    <header>
        <div class="p-3 mb-2 bg-white text-dark ">
            <p color: black;>BIENVENUE DANS CETTE PAGE QUI VAS VOUS DERIGER VERS DES AUTRES PAGE EN FONCTION DE VOTRE CHOIX.</p>
        </div>
    </header>
    <main>
	      <div class="p-3 mb-2 bg-white text-dark ">
            
        </div>
        <div>
            <form style="text-align:center;" class="p-3 mb-2 bg-white text-dark">
                <p>D&eacuteposer un nouveau ticket.</p>
			    <br />
                <a class="p-3 mb-2 bg-gradient-light text-dark" href="insertion_tickets.php">Appuez Ici</a>
            </form>
        </div>

    </main>
        <footer>
        <div>
            <p>APPUEZ POUR REVENIR</p>
			<a class="p-3 mb-2 bg-gradient-light text-dark" href="./">GO BACK</a>
        </div>
    </footer>

</body>
</html>