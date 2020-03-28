<?php
session_start();
require_once 'db.php'; //connection a la base de donnees
if (!isset($_SESSION['login'])){
	die("Connectez vous!");
	
}

?>
<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>foyer WADIE 3IL</title>
	    <script src='js/jquery-3.4.1.min.js'></script>
        <script src='js/07_jquery_base.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="container">
    <style>
	/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
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
    <span >INSERTION</span>
    <span>
        <img height="20" src="LOGO\LOGO WITHOUT TEXT.PNG" alt="fooding icon">
    </span>
    <br />
    <br />
    <br />
    <header>
        <div class="p-3 mb-2 bg-white text-dark ">
            <p>BIENVENUE DANS CETTE PAGE QUI VOUS PERMET D'INSERER L'INCIDENT.</p>
        </div>
    </header>
    <main>
        <div class="whatever">
            <form method="POST" id="testform" style="text-align:center;" class="p-3 mb-2 bg-white text-dark">
			<br>
			         <p style="color:black;"> Vous pouvez taper l'incident rencontr&eacute; !</p>
					 <textarea rows = "5" cols = "60" id="mes" name = "MESSAGE"></textarea><br>
					 <!--<input type = "submit" value = "submit"/>-->
					  <div class="popup" onclick="myFunction()"> <input class="btn btn-dark" type = "submit" id = "pop" value = "Soumettre"/>
						  <span class="popuptext" id="myPopup">Merci <?php echo $_SESSION['login'] ?></span>
            </form>
        </div>
		<script>
				     function myFunction() {
					      if(document.getElementById("mes").value == '')
									{
										alert("Tapez_quelque_chose!");
									}
							else{
							var popup = document.getElementById("myPopup");
								popup.classList.toggle("show");
						
								}
		            }
						
		 </script>
    </main>
    <footer>
	<hr/>
        <div style="text-align:center;">
           
			<a class="p-3 mb-2 bg-gradient-light text-dark" href="./"><input class="btn btn-dark" value = "Revenir"  type="button"></a>
        </div>
		<br>
		<br>
		<br>

    </footer>
	<script> 
	jQuery(document).ready(function () {

    $("#testform").submit(function (e) {
        e.preventDefault();//to not refresh the page
        var entrer = $(this).serialize();
        $.post("insertThat.php", entrer,function(){
		$("#testform")[0].reset();
		});

    });
});
</script>
</body>
</html>
