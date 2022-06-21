<?php
    require_once('lib/connexion.php');

    if(isset($_POST['name']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirmation']))
    {
        $name = $_POST['name'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirmation = $_POST['password_confirmation'];

        $check = $bdd->prepare("SELECT nom, mail FROM utilisateur WHERE mail = :?");
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0)
        {
            if(strlen($name) <= 50)
            {
                if(strlen($prenom) <= 50)
                {
                    if(strlen($email) <= 191)
                    {
                        if(filter_var($email,FILTER_VALIDATE_EMAIL))
                        {
                            if($password ==$password_confirmation)
                            { 
                                $password = hash('sha256', $password);

                                $insert = $bdd->prepare("INSERT INTO utilisateur(nom,prenom,mail,mdp) VALUES(name,prenom,email,password)");
                                $insert->execute(array(
                                    'name' => $name,
                                    'prenom' => $prenom,
                                    'email' => $email,
                                    'password' => $password
                                ));
                                header('Location: index.php?inscription_err=sucess');
                            }else header('Location: index.php?inscription_err=password');
                        }else header('Location: index.php?inscription_err=email');
                    }else header('Location: index.php?inscription_err=email_length');
                }else header('Location: index.php?inscription_err=prenom_length');
            }else header('Location: index.php?inscription_err=name_length');
        }else header('Location: index.php?inscription_err=already');
    }else header('Location: index.php');
?>
  