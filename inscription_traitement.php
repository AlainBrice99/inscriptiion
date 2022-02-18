<?php
    require_once 'config.php';

    if(isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['password_retype']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
        $check ->execute(array($email));
        $data = $check->fetch():
        $row = $check->rowcount();

        if($row == 0)
        {
            if(strlen($pseudo) <= 100)
            {
                if(strlen($email) <= 100)
                {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        if($password == $password_retype)
                        {
                            $password = hash('sha256', $password);
                            $ip = $_SRERVER['REMOTE_ADDR'];

                            $insert = $bdd->prepare('INSERT INTO utilisateur(pseudo, email, password, ip) VALUESA(:pseudo, :email, :password, :ip)');
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'eamil' => $email,
                                'password' => $password,
                                'ip' => $ip
                            ));
                            header('location:inscription.php?reg_err=success');
                        }else header('location:inscription.php?reg_err=alredy');
                    }else header('location:inscription.php?reg_err=alredy');
                }else header('location: inscription.php?reg_err=already');
            }else header('location: inscription;php?reg_err=already');
        }else header('location: inscription.php?reg_err=already');
    }
