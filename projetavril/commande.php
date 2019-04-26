

<?php
	//Les require 
		include('config/db.php');
    include('config/functions.php');
	 //Si aucun nom de service n'est enoyer il est rejeter
  if(!isset($_SESSION["auth"]) && empty($_SESSION["auth"]) ){
        $_SESSION["flash"]["danger text-center"]= "Connectez-vous!";
       
  }
?>

<?php
		  if(!empty($_POST['submit'])){
		  // var_dump($_POST);
		  // die();
		 $email = checkInput($_POST["email"]);

     $maison = checkInput($_POST["maison"]);
      $nom  = checkInput($_POST['nom']);
      $prenom = checkInput($_POST['prenom']);
      $contact1  = checkInput($_POST['contact1']);
        // Info user à enregister dans la base commandes et les info de la commande
        $req = $pdo->prepare("INSERT INTO `commande`( `nom`, `prenom`, `contact`, `email`,  `maison`,`date`)  VALUES (?,?,?,?,?,NOW())");
        $req->execute([$nom, $prenom, $contact1, $email,$maison]);
     header('Location: table.php');
  }
		  
		  
		  
		

  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>maison</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="js/bootstrap.min.js" rel="stylesheet">
  
  <link rel="stylesheet" href="css/all.min.css">

<link rel="stylesheet" href="js/all.min.js">

</head>
   <!-- /corps du projet -->
      <div class="container mt-5">
          <!-- ajouter un service -->
  <h2 class="h1-responsive font-weight-bold my-5 text-center text-success">Commander cette maison</h2>
  <!-- Section description -->
  <p class="grey-text w-responsive mx-auto mb-5">choissez la maison de votre reves en tout securité car avec mariko construction on est toujour satisfait .</p>
          <div class="row  d-flex justify-content-center">
              <div class="jumbotron col-md-6 col-lg-6 ">
                <form class="container " method="POST">
                <div class="form-group">
                    <div class="input-group">
                     <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom"/>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-account-star"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                     <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prenom"/>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fas fa-account"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" id="maison" name="maison" placeholder="entrer le nom de vore maison" class="form-control"/>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-account-edit"></i>
                        </span>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                      <input type="text" id="mail" name="email" placeholder="Email" class="form-control"/>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-account-edit"></i>
                        </span>
                      </div>
                    </div>
                </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="number" name="contact1" id="contact1" class="form-control"  placeholder="Contact 1"/>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-account-key"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <input type="submit" name="submit" id="submit" value="envoyer" class="btn btn-lg btn-primary"/>
                    <a href="index.php">retour</a>
                  </div>
                </form>
              </div>
              
                
      </div>



  </body>
  
  </html>