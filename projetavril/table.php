

<?php
    $bdd = new PDO("mysql:host=localhost;dbname=projetavril","root","");

?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="js/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <title>table</title>
</head>
<body style="background: url(./image/project1.jpg);">
    <section>
        <div class="container">
            <div class="jumbotron" style="margin: 100px;width: 150vh;margin-left: auto;">
                <h3 class="text-center text-info"><i class="fas fa-home"></i>Liste des maisons commander<i class="fas fa-home"></i></h3>
                <hr>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <strong><th>IDENTIFIANT</th></strong>
                            <strong><th>NOM</th></strong>
                            <strong><th>PRENOM</th></strong>
                            <strong><th>MAISON</th></strong>
                            <strong> <th>EMAIL</th></strong>
                            <strong> <th>contact</th></strong>
                           <strong> <th>ACTION</th></strong>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $req = $bdd -> query("SELECT * FROM commande");
                            while ($person = $req->fetch()) 
                            {
                                echo "<tr>";
                                echo "<td>" . $person['id'] . "</td>";
                                echo "<td>" . $person['nom'] . "</td>";
                               echo "<td>" . $person['prenom'] . "</td>";
                                echo "<td>" . $person['email'] . "</td>";
                                echo "<td>" . $person['maison'] . "</td>";
                                echo "<td>" . $person['contact'] . "</td>"; 
                        
                                echo "<td width='150'>";
                                echo '<a class="btn btn-danger" href="profil.php?id='.$person['id'].'"><i class="fas fa-eye"></i> Voir</a>';


                                echo ' ';
                            
                                echo "</tr>";
                                echo '</td>';
                            }
                        ?>

                    </tbody>
                </table>
                <a href="form.php" class="btn btn-primary"><i class="fas fa-pen">creer un compte</i></a>

                <a href="index.php" class="btn btn-dark"><i class="fas fa-arrow-left"></i>retour</a>
            </div>
        </div>
        <div class="thumbnail">

            
        </div>
    </section>
    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>