<?php 

 require 'database.php';
 $db = Database::connect();


            
if(isset($_POST['forminscription'])){
    
   if(!empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['nation'])){
       
      $nom = checkInput($_POST['nom']);
      $prenom = checkInput($_POST['prenom']);
      $date = checkInput($_POST['date']);
      $email = checkInput($_POST['email']);
      $nation = checkInput($_POST['nation']);
//      $phone = checkInput($_POST['phone']);
//      $age = checkInput($_POST['age']);
       
       
       $mdp = md5($_POST['mdp']);
        $mdp2 = md5($_POST['mdp2']);
       
       
       $nomlength =strlen($nom);
       if($nomlength <= 225){
           
           $reqnom= $db->prepare('SELECT *FROM membre WHERE email=?');
           $reqnom->execute(array($email));
           $pseudexist = $reqnom->rowCount();
           if($pseudexist ==0){
               
           
            if($mdp ==$mdp2){
           
               
               

               
               
               $insertmbr = $db->prepare('INSERT INTO membre(nom,prenom,date,nation,email,password ) VALUES( ?,?,?,?,?,?)');
               $insertmbr ->execute(array($nom,$prenom,$date,$nation,$email,$mdp));
               $Error = '<div class="alert alert-success">Compte  crée avec success veillez choisir  <a href="maison.php">une maison!!!!</div>';
               
             }else{
               $Error ='<div class="alert alert-danger">Les deux mots de passe ne sont pas identique!!!</div>';
           }
           
           } else{
               $Error ='<div class="alert alert-danger">Vous ne pouvez pas utliser le même email plus d\'une fois!!!!!</div>';
           }
         
               
       } else{ 
          $Error = " nom ne doit pas depasser 225 caractères";
       
       }
           
       
   } 
    
    else{ 
        
        $Error =  '<div class="alert alert-danger" style="color:red">Tous les champs doivent être obligatoirement remplir!!!!</div>';
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
<title>Inscrition</title>    
       <meta name="viewport" content="width=device-width, initial-scale=1">
    



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="styleshe" type="text/css" href="js/bootstrap.min.js">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    

	<link rel="stylesheet" href="css/all.min.css">

<link rel="stylesheet" href="js/all.min.js">

	<title>formulaire</title>
</head>
<body style="background: url(./image/constru.jpg) no-repeat; background-size: cover;" >

        
      
        
        
            <div class="container h-100" >
    <div class="d-flex justify-content-center">
        <div class="card mt-5 col-md-4 animated bounceInDown myForm">
            <div class="card-header" >
                <h4>VEUILLEZ VOUS INSCRIT ICI</h4>
            </div>
            <div class="card-body">
                <form method="POST">
                            
        <?php
        
       if(isset($Error)){
            echo '<font color="red">'.$Error.'</font>';
        }
        
        ?>
                    <div id="dynamic_container">
                        <div class="input-group">
                            
                            <div class="input-group-prepend">
                                <span class="input-group-text br-15"><i class="fas fa-user-graduate"></i></span>
                            </div>
                            <input type="text"  name="nom" id="nom" placeholder="nom" class="form-control"  value=""/>
                        </div>
                        
                        
                         <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text br-15"><i class="fas fa-user-graduate"></i></span>
                            </div>
                            <input type="text" name="prenom" id="prenom" placeholder=" prenom" class="form-control"/>
                        </div>
                        
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text br-15"><i class="fas fa-flag"></i></span>
                            </div>
                            <input type="date" name="date" id="date" placeholder="" class="form-control"/>
                        </div>
                        
                         <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text br-15"><i class="fas fa-flag"></i></span>
                            </div>
                            <input type="text" name="nation" id="nation" placeholder="votre nationnalité" class="form-control"/>
                        </div>
                        
                        
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text br-15"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="email" name="email" id="email" placeholder=" Email" class="form-control"/>
                        </div>
                        
                         
                       
                        
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text br-15"><i class="fas fa-user-lock"></i></span>
                            </div>
                            <input type="password" name="mdp" id="mdp" placeholder="password" class="form-control"/>
                        </div>
                        
                        
                        <div class="input-group mt-3">
              <div class="input-group-prepend">
                <span class="input-group-text br-15"><i class="fas fa-user-lock"></i></span>
              </div>
              <input type="password" name="mdp2" id="mdp2" placeholder="password" class="form-control"/>
            </div>
                        
                        
                    </div>
                    
                    
                    <div class="card-footer">
                            
                    <a class="btn btn-primary" href="index.php"><span style="font-size: 10px;" ><i class="fas fa-arrow-left"></i>RETOUR</span></a>
                <input  type="submit" style="font-size: 20px; border-radius: 20px"  value="S'insrire"  name="forminscription" class="btn btn-success btn-sm float-right submit_btn"/>
                   
            </div>
                    
                    
                    
                </form>
            </div>
            
        </div>
    </div>
    </dvi>
        

        
    
    </div>
    

</div>
  
    </div>  
    <?php  
include 'footer.php';

    ?>
</body>
</html>