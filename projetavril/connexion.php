

<?php


     session_start();
    require 'database.php';
 
    $error='';
    $success='';

    if(!empty($_POST)) 
    {
        $nom_prenom   = checkInput($_POST['nom_prenom']);
        
        $email   = checkInput($_POST['email']);
        
        $maison   = checkInput($_POST['maison']);
        $mdp   = checkInput($_POST['mdp']);

        
        
       $mdp = md5($_POST['mdp']);
       
        $valide = true;

            if (empty($email) || empty($mdp) ){

                $error='le formulaire contient un champ vide';
                $valide=false;
            }


            
            if ($valide){
                $db = Database::connect();
                $statement = $db->prepare("INSERT INTO catalina(nom_prenom,email,maison,password) VALUES(?,?,?,?)");
                $statement->execute(array($nom_prenom,$email,$maison,$mdp));
                Database::disconnect();
                $success="maison louer ou acheter";
                $_SESSION['success']=$success;
            }else{
                $_SESSION['error'] = $error;
            }
    }

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?> 





<!DOCTYPE html>

<html>
<head>
<title>Connexion</title>    

    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    
      <link rel="stylesheet" href="css/all.min.css">
    
  
      <link rel="stylesheet" href="js/all.min.js">
    
  
      <link rel="stylesheet" href="style2.css">
    
  
           
    
</head>
    <body >
     
        <br>
        <br>
        <br>
    <div align="center" class="center">
        <center class="container">

            </center>
        <form method="POST">
            
        <div class="login-wrap">
    <div class="login-html">
                 <?php
       
        if(isset($Error)){
            echo '<font color="red">'.$Error.'</font>';
       }
        
    ?>
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">CONNECTEZ-VOUS!!!</label>
        <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group">
                    <label for="text" class="label">nom_prenom</label>
                    <input id="nom_prenom" name="nom_prenom" type="text" class="input" value="<?php if(isset($pseudo)){echo $pseudo;} ?>">
                </div>
                <div class="group">
                    <label for="email" class="label">Entrer vos email</label>
                    <input id="email" name="email" type="email" class="input" value="<?php if(isset($pseudo)){echo $pseudo;} ?>">
                </div>
                <div class="group">
                    <label for="text" class="label">choisisez votre maison</label>
                    <input id="maison" name="maison" type="maison" class="input" value="<?php if(isset($pseudo)){echo $pseudo;} ?>">
                </div>
                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" name="mdp" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Connexion" name="formconnect">
                </div>
                 <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    <span class="span1">Vous n'avez pas de compte?</span><a href="form.php"><span class="span2">S'inscrire</span></a>
                </div>
                
                     
                     <div align="left">
                    <a  type="button" class="btn btn-primary" href="index.php"><span class="span" ><i class="fas fa-arrow-left"></i>RETOUR</span></a>

                    <a  type="button" class="btn btn-success" href="table.php"><span class="span"> VERIFICATION</span></a>
                </div>
            </div>
                <div class="hr"></div>
            </div>
            
            
         
            
            
        </div>
        
    </div>
            
</div>
    
                    
</form>
       
    </div>
        <br><br><br><br><br><br><br><br><br>
   
</div>
   
    
    <footer id="footer" style="background-color: skyblue;">
  <div class="container">
    <center>
<div class="row">
 <div class="col-md-4">
   <h2>Nos contacts</h2>
     <p style="color: black;">
     
     mail: moussokoro@.fr<br>
     phone1: 08765567<br>
      

     </p>

    
</div>  
 <div class="col-md-4">
    <h2 >Notre siège</h2>
     <p style="color: black;">BINGERVILLE</p>
 </div>
 <div class="col-md-4">
     <h2>Contactez-nous</h2>
     <form action="#">
     <label for="message" style="color: black;">Message</label>
         <textarea class="form-control" name="message"></textarea><br>
<br>

         <input type="submit"  class="btn btn-success" value="ENVOYER">
     
     
     </form>
    </div>  
    
    
    
</div>
        </center>


</div>
</footer>
     
        
    </body>
     
</html>
            <h2 style="color: #444;">RAPIDE</h2>
        <p>Avec ,<i><strong>mariko immobilier</strong></i> vos probleme de maisons seront résolu.</p> 



?>