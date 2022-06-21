<?php
    session_start();
    
    include_once("c_boutique.php");
?>
<!DOCTYPE html>
<html>
    <head>  
        
        <title>SheeeshIT</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="../style/v_boutique.css">
    </head>
    <body>
       
        <header>
            <h1>SheeeshIT</h1>
        </header>
        <nav>
            <ul id="b_menu">
            <li><a href="../index.php">Accueil</a></li>
                <li><a href="v_boutique.php">Boutique</a></li>
                <li><a href="v_inscription.php">Inscription</a></li>
                <li><a href="v_connexion.php">Connexion</a></li>
                <li><a href="v_panier.php">Panier</a></li>
            </ul>
        </nav>
        <?php foreach($Produits as $produit): ?>
        <div class="col">
            <div class="card">
                <img src="<?php echo $produit->image; ?>" alt="<?php echo $produit->nom; ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produit->nom; ?></h5>
                    <p class="card-text"><?php echo $produit->prix; ?>€</p>
                    <a href="v_panier.php" class="btn btn-primary">Ajouter au panier</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </body>
</html>
