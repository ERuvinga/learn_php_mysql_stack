<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Web2/tp</title>
        <meta name="viewport" content="width= device-width, initial-scale=1.0" />
        <meta name="author" content="Elie Ruvinga" />
        <meta name="keywords" content="Cours, Web, tp" />
        <meta name="description" content="Cours Web2" />
    
        <link rel="stylesheet" href="../style/bootstrap.min.css">
        <link rel="stylesheet" href="../style/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="../style/fontawesome/css/solid.min.css">
        <link rel="stylesheet" href="../style/style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 formCard">
                    <div class="card">
                        <h1 class="text-center bg-info text-white card-header">Login</h1>
                        <form action="#" method="post" class="card-body form-control">
                            <div class="form-group">
                                <label for="name">e-mail or userName</label>
                                <input type="text" class="form-control" name="name" placeholder="email" required
                                    id="name" />
                            </div><br/>
  
                            <div class="form-group">
                                <label for="pswrd">mot de pass</label>
                                <input type="password" class="form-control" name="pswrd" placeholder="votre mot de pass" required id="pswrd" />
                            </div><br/>

                            <div class="btns form-group">
                                <input type="reset" value="initilisation" class="btn btn-warning" />
                                <input type="submit" value="Envoit" class="btn btn-success" />
                                <a href="./register.php" class="text-info"> pas de compte ? <i>Créer un compte</i></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/main.js"></script>
        <script src="../js/jquery-3.6.0.min.js"></script>
    </body>
</html>
