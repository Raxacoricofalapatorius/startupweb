<?php if (!empty($_SESSION['pseudo'])) { ?>
	<!DOCTYPE html>
	<html lang="fr">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Admin - Novus Studio</title>

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
	          <h1>Espace d'administration</h1>
	          <p></p>
	        </div>
			<div class="col-md-6">

				<?php 
					if (isset($_GET['page']))
					{
	        			$page = $_GET['page']; // On récupère le numéro de la page indiqué dans l'adresse
					}
					else // La variable n'existe pas, c'est la première fois qu'on charge la page
					{
	        			$page = 1; // On se met sur la page 1 (par défaut)
					}
	  
					// On calcule le numéro du premier message qu'on prend pour le LIMIT de MySQL
					$premier_message_affiche = ($page - 1) * 10;
					$nombre_messages_par_page = 10;

					$reponse = $bdd->query('SELECT * FROM articles ORDER BY id DESC LIMIT ' . $premier_message_affiche . ', ' . $nombre_messages_par_page);

					while ($articles = $reponse->fetch())
					{
						?>

						<div class="row">
							<p><?php echo $articles['titre'];?> -- <a href="edit.php?id=<?php echo $articles['id'];?>">Modifier</a> | <a style="color:red;" href="delete.php?id=<?php echo $articles['id'];?>">Supprimer</a></p>
						</div>
			
					<?php } 

					$reponse->closeCursor();
				?>

				<nav>
	  				<ul class="pagination">
						<?php
							$retour = $bdd->query('SELECT COUNT(*) AS nb_articles FROM articles');
							$donnees = $retour->fetch();
							$nombre_articles = $donnees['nb_articles'];
							$nombre_pages  = ceil($nombre_articles / 10);
							if ($page > 1)
							{
								$previous = $page - 1;
							}
							else
							{
								$previous = 1;
							}
							if ($page < $nombre_pages - 1)
							{
								$next = $page + 1;
							}
							else
							{
								$next = $nombre_pages;
							}

							?>
							<li>
								<a href="index.php?page=<?php echo $previous;?>" aria-label="Previous">
	       							<span aria-hidden="true">&laquo;</span>
	      						</a>
	      					</li>
	      					<?php

							for ($i = 1 ; $i <= $nombre_pages ; $i++)
							{
	   							?><li class="<?php if ($i == $page) { echo "active";} ?>"><a href="index.php?page=<?php echo $i;?>"><?php echo $i;?></a></li><?php
							}?>
							<li>
	      						<a href="index.php?page=<?php echo $next;?>" aria-label="Next">
	        						<span aria-hidden="true">&raquo;</span>
	      						</a>
	    					</li>
					</ul>
				</nav>
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