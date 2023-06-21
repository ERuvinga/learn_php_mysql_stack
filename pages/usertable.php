<!DOCTYPE html>
<html lang="fr">

<head>
    <title>formulaire Inscription</title>
    <meta name="viewport" content="width= device-width, initial-scale=1.0" />
    <meta name="author" content="Elie Ruvinga" />
    <meta name="keywords" content="Cours, Web" />
    <meta name="description" content="Cours Web2" />

    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../style/fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <script>
        alert('    <?php 
        echo $_GET['msg'];
    ?>')
    </script>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"><br><br>
                <div class="card">
                    <div class="card-header bg-info text-white">STUDENT INFORMATIONS</div>
                    <div class="card-body">
                        <table class="table text-start" border='1'>
                            <tr class="bg-dark text-white">
                                <th>id</th>
                                <th>img</th>
                                <th>Nom</th>
                                <th>e-mail</th>
                                <th>passWord</th>
                            </tr>

                            <?php
                                include_once('connect.php');
                                $select = 'SELECT * FROM user';
                                $result = $con->query($select);
                                while($row=$result->fetch_assoc())
                                {?>
                            
                                <tr>
                                    <td><?php echo $row['matricule'];?></td>
                                    <td><?php  echo $row['img']; ?></td>
                                    <td><?php  echo $row['name'];?></td>
                                    <td><?php  echo $row['email'];?></td>
                                    <td><?php  echo $row['pswd'];?></td>

                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>

</html>