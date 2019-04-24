
<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>connection</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="main2.css" rel='stylesheet' type='text/css' />
	
		<script src="js/jquery.min.js"></script>
	
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href="main.css" rel='stylesheet' type='text/css' />

		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1500);
				});
			});
		</script>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		

	</head>
	<body>
		<div id="top" class="bg2">
	
			<div id="home" class="header">
					<div class="top-header">
						<div class="container">
						<div class="logo">
							<a href="#"><img src="image/logo2.png" title="Dasiy" style="border-radius: 40PX;" /></a>
						</div>
					
						 <nav class="top-nav">
							<ul class="top-nav">
								<li><a href="#" id="accueil">Accueil</a></li>
								<li><a href="form.php">Creer un compte</a></li>
								<li><a href="maison.php">maison</a></li>
						       <li><a href="commande.php">maison commander</a></li>
                                <li><a href="#" class="scroll">Contact</a></li>
							</ul>
							<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
        </div>
			


