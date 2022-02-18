<?php
    session_start();
    require_once 'config.php';

    if(isset($_POST[ 'email']) && isset($_POST['password']))
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $chek = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
        $chek->execute(array($email));
        $data = $chek->fetch();
        $row = $chek->rowcount();

        if($row == 1)
        {
            if(filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                $password  = hash('sha256', $password);
                if($data['password'] === $password)
                {
                    $_SESSION['user'] = $data['pseudo'];
                    header('location:landing.php');
                }else header('location:index.php?login_err=password')
            }else header('location:index.php?login_err=email')
        }else header('location:index.php?login_err=already');
    }else header('location:index.php');
?>