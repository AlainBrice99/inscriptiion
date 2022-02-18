DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="Viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Inscription</title>
    </head>
    <body>
        <div class="login-form">
            <?php
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succes</strong>inscription reussi !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe different
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_lenght':
                        ?>
                            <div class="alert alert-dnager">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-success">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php
                        break;
                                    
                        case 'already':
                        ?>
                            <div class="alert alert-success">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php
                        break;
                }
                ?>
            <form action="inscription_traitement.php" method="post">
                <h2 class="text-center">Inscription</h2>
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplate="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplate="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplate="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div>
            </form>
        </div>
        <style>
        </style>
    </body>
</html>               