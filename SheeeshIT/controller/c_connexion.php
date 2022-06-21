<?php
    session_start();
    require_once('lib/connexion.php');

    if(isset($_POST['email']) && isset($_POST['mdp']))
    {
        $mail = $_POST['email'];
        $mdp = $_POST['mdp'];

        $check = $bdd->prepare("SELECT nom, mail,mdp FROM utilisateur WHERE mail = :?");
        $check->execute(array($mail));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($mail ,FILTER_VALIDATE_EMAIL))
            {
                $mdp = hash('sha256', $mdp);
                if($data['mdp'] === $mdp  )
                {
                    $_SESSION['user'] = $data['nom'];
                    header('Location: v_panier.php');
                }else header('Location: index.php?login_err=password');
            }else header('Location: index.php?login_err=mail'); 
        }else header('Location: index.php?login_err=mail');
    }else header('Location: index.php');
        
    
?>