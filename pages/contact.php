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
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="phone" required
                                    id="phone" />
                            </div><br/>
 
                            <div class="form-group">
                                <label for="email">e-mail</label>
                                <input type="text" class="form-control" name="email" placeholder="email" required
                                    id="email" />
                            </div><br/>
                              
                            <div class="form-group">
                                <label for="objet">Objet </label>
                                <input type="text" class="form-control" name="pswrd" placeholder="Objet du message" required id="pswrd" />
                            </div><br/>

                            <div class="form-group">
                                <label for="message">Message </label>
                                <textarea class="form-control" name="message" placeholder="votre mot de pass" required ></textarea>
                            </div><br/>                            
                            <div class="btns form-group">
                                <input type="submit" value="Envoit" class="btn btn-success" />
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
