<?php
    function afficher_boutique()
    {
        if(require("lib/connexion.php"))
        {
            $req = $connectDb->prepare("SELECT * FROM article");
            $req->execute();
            
            $data=$req->fetchAll(PDO::FETCH_OBJ);

            return $data;

            $req->closeCursor();


        }
    }


?>