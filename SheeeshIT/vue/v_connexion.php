<html>
    <head>  
        
        <title>SheeeshIT</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
       
        <header>
            <h1>SheeeshIT</h1>
        </header>
        <nav>
            <ul>
                <li><a href="v_main.php">Accueil</a></li>
                <li><a href="#">Boutique</a></li>
                <li><a href="v_inscription.php">Inscription</a></li>
                <li><a href="v_connexion">Connexion</a></li>
            </ul>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form action="index.php?page=connexion" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Se connecter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
