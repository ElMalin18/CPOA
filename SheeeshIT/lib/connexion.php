<?php
 function connectDb(){
      $host = 'localhost';      // ou sql.hebergeur.com
      $user = 'root';          // ou login
      $pwd = 'root';          // ou xxxxxx
      $db = 'sheeshIT';      // ou nom de la base
      
     
  try {
       $bdd = new PDO('mysql:host='.$host.';dbname='.$db.
                      ';charset=utf8', $user, $pwd,
                  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
       return $bdd;
      } catch (Exception $e) {
       exit('Erreur : '.$e->getMessage());
  }
  $mysqli = mysqli_connect($bdd['host'], $bdd['user'], $bdd['pwd'], $bdd['db']);
  if(!$mysqli) {
     echo "Connexion non établie.";
     exit;
}
}

?>
