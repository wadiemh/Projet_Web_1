<?php
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=incidents', 'root', '');
			
        } catch (PDOException $e) 
        { 
            echo "Erreur PDO : ".$e->getMessage()."<br/>";
            die(); 
        }
?>