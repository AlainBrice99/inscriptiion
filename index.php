<DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="Viewport" content="width=device-width, initial-scale=1.0">
        <link href="link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Connexion</title>
    </head>
    <body>
        <div class="login-form">
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
            <form action="connexion.php" method="post">
                <h2 class="text-center">Connexion</h2>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplate="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">connexion</button>
                </div>
            </form>
            <p class="text-center">cliquez sur le liens <a href="inscription.php">Inscription</a> pour vous incrire.</p>
        </div>
        <style>
        </style>
    </body>
</html>                            


