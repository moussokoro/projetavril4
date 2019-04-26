<!DOCTYPE html>
<html>
<head>
  <title>projet04</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="js/jquery.min.js"></script>
  
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="main.css" rel='stylesheet' type='text/css' />
    <link href="css/all.min.css" rel='stylesheet' type='text/css' />
    <link href="js/all.min.js" rel='stylesheet' type='text/css' />
    

    
    

<body>
<marquee style="color:lightsalmon; width: 900px;margin-right: -50px;" ><h1>VOTRE MAISON ON LA VOIS COMME VOUS</h1></marquee>
     <div id="top" class="bg2">
  
      <div id="home" class="header">
          <div class="top-header">
            <div class="container">
            <div class="logo">
              <a href="#"><img src="image/log.jpg" title="Dasiy" style="border-radius: 10px" /></a>
            </div>
          
             <nav class="top-nav">
              <ul class="top-nav">
                <li><a href="index.php" id="accueil">Accueil</a></li>
                <li><a href="form.php">Creer un compte</a></li>
                <li><a href="maison.php">villa&duplex</a></li>
                <li><a href="table.php">maisons occuper</a></li>
        
                  <li><a href="#footer" class="scroll">Contact</a></li>
              </ul>
              <a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
            </nav>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
        </div> 
        
      
 <section id="slideshow" >
  <div class="container">
    <div class="C_slider">
      <div class="slider">
       <figure>
         <img src="image/about2.jpg" alt="" width="640" height="310">
         <figcaption><i>"la location nous a loué a ce métier"</i></figcaption>
       </figure>
       <figure>
         <img src="image/b.jpg" alt="" width="640" height="310">
        <figcaption > <i>" Nous somme pret a la négociation"</i></figcaption> 
       </figure>
       
      </div>
    </div>
    
  </div>
   
<span id="imeline"></span>

 </section>
 <style type="text/css" href="">
   #slideshow .container { 
  position:relative; width: 240vh; height: 310px; overflow: hidden; 
  } 

  #slideshow .container:after {
   position:absolute; bottom: 0; left:0; content: " "; width: 100vh; height: 3px; background: #999;
   } 
    #slideshow .slider {
     position: absolute; left:0; top:0; width: 400%; height: 310px; 
     }  #slideshow figure {
      position:relative; display:inline-block; padding:0; margin:0; 
      } /* petit effet de vignette sur les images */ #slideshow figure:after { position: absolute; display:block; content: " "; top:0; left:0; width: 1000%; height: 100%; box-shadow: 0 0 65px rgba(0,0,0, 0.5) inset; } /* styles de nos lÃ©gendes */ #slideshow figcaption { position:absolute; left:0; right:0; bottom: 5px; padding: 20px; margin:0; border-top: 1px solid rgb(225,225,225); text-align:center; letter-spacing: 0.05em; word-spacing: 0.05em; font-family: Georgia, Times, serif; background: #fff; background: rgba(255,255,255,0.7); color: #555; text-shadow: -1px -1px 0 rgba(255,255,255,0.3); }  

 </style>
 <div id="about" class="about">
 <div class="">
          <div class="about-head text-center">

            
            <h3>Quelques raisons pour choisir  <span>mariko construction</span></h3>
            <p>Pour tous actions sur notre plateforme vous devrez être inscrire et nous nous chargerons de rentree en contact avec des architectes de renom pour la contruction de votre maison en un clin d'oeil!!!</p>
          </div>
           
          <div class="container">
    <center>
<div class="row">
 <div class="col-md-4">
 <i class="fas fa-user" style="font-size: 50px;color:salmon;" > </i>
   <h2 style="color: #444; ">RAPIDE</h2>
   
        <p>Avec ,<i><strong>mariko construction</strong></i> vos probleme de maisons seront résolu.</p> 

    
</div>  
 <div class="col-md-4">
  <i class="fas fa-home" style="font-size: 50px;color:salmon;"></i>
    <h2 style="color: #444;">PAS CHERS</h2>
     <p>vivez dans des habitations avec des prix abordables</p>
 </div>
 <div class="col-md-4">

  <i class="fas fa-tag" style="font-size: 50px;color:salmon;"></i>
     <h2 style="color: #444;">SUR</h2>
    
       <p>avec nous ces l'assurance ou rien</p>  
       
     </div>
    
            </div>

           
            
          <style>

              { padding: 1em 0 2em;
  position: relative;
}
.about-head h3{
  color: #868686;
  text-transform: uppercase;
  font-size: 1.8em;
  border-bottom: 1px solid #868686;
  display: inline-block;
  padding: 0 0 0.4em;
  font-family: 'open_sanssemibold';
}
.about-head h3 span{
  color:#FC635E;
}
</style>
    </div>
    <div>
   
   <?php include 'imo.php';  ?>
    </div>
<footer id="footer" style="background-color: skyblue; ">
  <div class="container">
    <center>
<div class="row">
 <div class="col-md-4">
   <h2>Nos contacts</h2>
     <p>
     
     mail: moussokoro@.fr<br>
     phone1: 08765567<br>
      

     </p>

    
</div>  
 <div class="col-md-4">
    <h2>Notre siège</h2>
     <p>BINGERVILLE</p>
 </div>
 <div class="col-md-4">
     <h2>Contactez-nous</h2>
     <form action="#">
     <label for="message">Message</label>
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