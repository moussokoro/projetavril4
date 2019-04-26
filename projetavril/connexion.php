<?php 
session_start();
include 'header.php';
require 'database.php';
 $db = Database::connect();
if(isset($_POST['formconnect'])){
     $email =  htmlspecialchars($_POST['email']);
     $mdp =  md5($_POST['mdp']);
    
    
    if(!empty($_POST['email']) and !empty($_POST['mdp'])){
       
        $reqemail = $db->prepare('SELECT * FROM membre WHERE email = ? and password=?');
        $reqemail->execute(array($email,$mdp));
        
        $emailexist = $reqemail->rowCount();
        if($emailexist == 1){
            $emailinfo = $reqemail->fetch();
             $_SESSION['id'] =$emailinfo['id'];
            $_SESSION['email'] = $emailinfo['email'];
            header("Location:maison.php");
           
            
        } else{
            
            $Error='<div class="alert alert-danger" style="color:red">Password ou email inccorrect!!!!</div>';
        }
    }
    
    else{
        $Error ='<div class="alert alert-danger" style="color:red">Pour vous connectez veillez entrer vos coordonnées!!!!</div>';
    }
    
    
}
?>





<!DOCTYPE html>

<html>
<head>
<title>Connexion</title>    

    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    
      <link rel="stylesheet" href="style2.css">
    
  
           
    
</head>
    <body>
     
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
					<label for="email" class="label">Entrer vos email</label>
					<input id="email" name="email" type="email" class="input" value="<?php if(isset($pseudo)){echo $pseudo;} ?>">
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
					<span class="span1">Vous n'avez pas de compte?</span><a href="registr.php"><span class="span2">S'inscrire</span></a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="edition.php"><span class="span2">Mot de passe oublié?</span></a>
				</div>
                     
                     <div align="left">
					<a  type="button" class="btn btn-primary" href="index.php"><span class="span" ><i class="fas fa-arrow-left"></i>RETOUR</span></a>
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
   
    
    <?php 
            include 'footer.php';
        ?>
        
    </body>
     
</html>