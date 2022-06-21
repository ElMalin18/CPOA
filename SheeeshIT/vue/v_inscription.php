

<!DOCTYPE html>
<html>
    <head>  
        
        <title>SheeeshIT</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="../style/v_inscription.css">
    </head>
    <body>
       
        <header>
            <h1>SheeeshIT</h1>
        </header>
        <nav>
            <ul id="i_menu">
            <li><a href="../index.php">Accueil</a></li>
                <li><a href="v_boutique.php">Boutique</a></li>
                <li><a href="v_inscription.php">Inscription</a></li>
                <li><a href="v_connexion.php">Connexion</a></li>
            </ul>
        </nav>
        <div id="txtInscr">
            <p>
                Bienvenue sur SheeeshIT <br>Si vous voulez vous inscrire, remplissez le formulaire ci-dessous.
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
                    <form action="../index.php" method="post">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Prenom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirmation du mot de passe</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>