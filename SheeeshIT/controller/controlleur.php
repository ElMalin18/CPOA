<?php
     $bdd = connectDb(); //connexion a  la BDD
     //die();
     
     $queryListColumn = $bdd->prepare("DESCRIBE film");
     $queryListColumn->execute();
     $listColumn = $queryListColumn->fetchAll(PDO::FETCH_COLUMN);

     if (isset($_GET["orderBy"]) && isset($_GET["orderDirection"]) && in_array($_GET["orderBy"], $listColumn) && in_array($_GET["orderDirection"], array('ASC','DESC')) ) {
          $orderBy = $_GET["orderBy"];
          $orderDirection = $_GET["orderDirection"];
          
     }else {
          $orderBy = "id";
          $orderDirection = "ASC";
     }   
     
     $query = $bdd->prepare('SELECT * from film ORDER BY ' . $orderBy . ' ' . $orderDirection);
     $query->execute();
     $listFilm = $query->fetchAll();
?>
