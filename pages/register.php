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
                        <h1 class="text-center bg-info text-white card-header">Register</h1>
                        <form action="registerprocess.php" method="post" class="card-body form-control" enctype = "multipart/form-data">

                        <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" class="form-control" name="name" placeholder="name" required id="name" />
                            </div><br/>
                            <div class="form-group">
                                <label for="email">e-mail</label>
                                <input type="text" class="form-control" name="email" placeholder="adresse email" required id="email" />
                            </div><br/>

                            <div class="form-group">
                                <label for="pswrd">passWord*</label>
                                <input type="password" class="form-control" name="pswrd" placeholder="votre mot de pass" required id="pswrd" />
                            </div><br/>

                            <div class="form-group">
                                <label for="cpswrd">confirm password</label>
                                <input type="password" class="form-control" name="cpswrd" placeholder="cofirm mot de pass" required id="pswrd" />
                            </div><br/>

                            <div class="form-group">
                                <label for="imgp">confirm password</label>
                                <input type="file" class="form-control" name="imgp" required/>
                            </div><br/>

                            <div class="btns form-group">
                                <input type="submit" value="Envoit" class="btn btn-success" />
                                <a href="./login.php" class="text-info"> avez vous un compte ? <i>Connectez vous !</i></a>
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
