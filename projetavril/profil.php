

<?php
    $bdd = new PDO("mysql:host=localhost;dbname=projetavril","root","");
    if (!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }

    $req = $bdd->prepare("SELECT * FROM commande where id = ?");
    $req->execute(array($id));
    $person = $req->fetch();

    function checkInput($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

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
    <link rel="stylesheet" href="js/all.min.js">
    <link rel="stylesheet" type="text/css" href="css/style2.css">


    <title>profil</title>
</head>
<body style="background: url(./images/about1.jpg)no-repeat; background-size: cover;margin-top: 100px; ">
    <section>
        <div class="container">
            <div class="jumbotron">
                <h3 class="text-center text-info">Information sur le client</h3>
                <form>
                    <div class="form-group">
                         <strong><label>Nom: </label></strong><?php echo ' ' . $person['nom'];?>
                    </div>
                    <div class="form-group">
                         <strong><label>Prenom: </label></strong><?php echo ' ' . $person['prenom'];?>

                    </div>
                    <div class="form-group">
                        <strong><label>Maison: </label></strong><?php echo ' ' . $person['maison'];?>

                    </div>
                    
                    <div class="form-group">
                        <strong><label>Email: </label></strong><?php echo ' ' . $person['email'];?>
                    </div>
                    <div class="form-group">
                        <strong><label>Contact: </label></strong><?php echo ' ' . $person['contact'];?>

                    </div>
                    
                </form>
                <div class="return">

        <a type="button" class="btn btn-danger" href="deconnexion.php"> Deconnexion</a>
                </div>
            </div>
        </div>
    </section>
    








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>