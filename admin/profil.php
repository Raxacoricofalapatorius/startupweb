<?php session_start();
if (!empty($_SESSION['pseudo'])) { ?>
	<!DOCTYPE html>
	<html lang="fr">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Mon compte - Admin Novus Studio</title>

	    <!-- Bootstrap -->
	    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	    <link rel="icon" href="favicon.png">
	  </head>
	  <body>
	  	<?php include('include/nav.php'); ?>
		<div class="container">
			<div class="jumbotron">
	          <h1>Mon compte</h1>
	          <div class="jumbotron">
	          	<div class="container">
	          		<ul>				
	          			<li><strong>Pseudo</strong> : <?php echo $_SESSION['pseudo'];?> </li>
	          			<li><strong>Nom & Prénom</strong> : <?php echo $_SESSION['nom'];?> <?php echo $_SESSION['prenom'];?> </li>
	          			<li><strong>Email</strong> : <?php echo $_SESSION['email'];?> </li>
	          			<li><strong>Rang</strong> : <?php 
	          				switch ($_SESSION['rank']) {
	          					case '1':
	          						echo "Président";
	          						break;
	          					case '2':
	          						echo "Secrétaire / Trésorière";
	          						break;
	          					case '3':
	          						echo "Vice-président";
	          						break;
	          					case '4':
	          						echo "Fondateur";
	          						break;
	          					case '5':
	          						echo "Editeur";
	          						break;
	          				}?>
	          			</li>
	          		</ul>
	      		</div>
	      	</div>
	          
	        </div>
			<div class="col-md-6">

				
			</div>
		</div>

	  <?php include('include/footer.php'); ?>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="bootstrap/js/bootstrap.min.js"></script>
	  </body>
	</html>
<?php } ?> 