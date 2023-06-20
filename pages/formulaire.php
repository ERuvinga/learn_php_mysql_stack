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
                        <form action="table.php" method="post" class="card-body form-control">
                            <div class="form-group">
                                <label for="fname">Nom *</label>
                                <input type="text" class="form-control" name="fname" placeholder="nom" required
                                    id="fname" />
                            </div><br/>
                            <div class="form-group">
                                <label for="lname">Postnom *</label>
                                <input type="text" class="form-control" name="lname" placeholder="Postnom" required
                                    id="lname" />
                            </div><br/>
                            <div class="form-group">
                                <label for="Oname">Prenon *</label>
                                <input type="text" class="form-control" name="Oname" placeholder="Prenom" required
                                    id="lname" />
                            </div><br/>

                            <div class="form-group">
                                <label for="phone">telephone</label>
                                <input type="text" class="form-control" name="phone" placeholder="telephone" required id="phone" />
                            </div><br/>

                            <div class="form-group">
                                <label for="email">e-mail</label>
                                <input type="text" class="form-control" name="email" placeholder="adresse email" required id="email" />
                            </div><br/>
                            <div class="form-group">
                                <label for="sborn">lieu de naissance</label>
                                <input type="text" class="form-control" name="sborn" placeholder="lieu de naisc" required id="sborn" />
                            </div><br/>

                            <div class="form-group">
                                <label for="dborn">Date de naissance</label>
                                <input type="date" class="form-control" name="dborn" placeholder="date de naisc" required id="dborn" />
                            </div><br/>

                            <div class="form-group">
                                <label for="depart">Departement</label>
                                <select name="depart" id="depart">
                                    <option>R.I.T</option>
                                    <option>Genie Elec</option>
                                    <option>Genie Mec</option>
                                </select>
                            </div><br/>

                            <div class="form-group">
                                <label for="promotion">promition</label>
                                <select name="promotion" id="promotion">
                                    <option>L1</option>
                                    <option>L2</option>
                                    <option>L3</option>
                                </select>
                            </div><br/>
  
                            <div class="form-group">
                                <label for="pswrd">mot de pass</label>
                                <input type="password" class="form-control" name="pswrd" placeholder="votre mot de pass" required id="pswrd" />
                            </div><br/>

                            <div class="btns form-group">
                                <input type="reset" value="initilisation" class="btn btn-warning" />
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
