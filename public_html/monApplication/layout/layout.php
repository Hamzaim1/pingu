<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
	<title>UAPV MS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	   

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="css/profil.css" rel="stylesheet">
	<link href="css/popup.css" rel="stylesheet">
	<link href="css/msg.css" rel="stylesheet">


	</head>
	<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">UAPV MS</a>
		</div>
		<ul class="nav navbar-nav">
		  <li class="active"><a href="#">Home</a></li>
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Pofil</a></li>
		  <li id="deco"><a  href="
		  <?php if(isset($_SESSION['user'])){echo "monApplication.php?action=login";}
		  else{echo "monApplication.php?action=login";}?>"><?php
		  if(isset($_SESSION['user']))
		  {echo '<i class="decon"></i>'.'DECONEXION';}
		  else{echo '<i class="login"></i>'.' LOGIN';}
		  
		  ?></a></li>
		</ul>
	  </div>
	</nav> 
		 
		<?php
		if(isset($_SESSION['user'])){
			include("monApplication/view/profilSuccess.php");
			include("monApplication/view/listeAmiesSuccess.php");
			include("monApplication/view/chatSuccess.php");
			include("monApplication/view/postsSuccess.php");
		}
		else{
		include("monApplication/view/loginSuccess.php");
		}

		?>
		

	
			<script src="js/popup.js" type="text/javascript"></script>
			<script src="js/msg_move.js" type="text/javascript"></script>
  </body>

</html>
