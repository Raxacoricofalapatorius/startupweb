<div class="page-header">
  <div class="container">
  	<h1>Le Blog <small>de Novus</small></h1>
  </div>
</div>
<div class="container">
	<div class="row">
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
				$premier_message_affiche = ($page - 1) * 5;
				$nombre_messages_par_page = 5;

				$reponse = $bdd->query('SELECT * FROM articles ORDER BY id DESC LIMIT ' . $premier_message_affiche . ', ' . $nombre_messages_par_page);

				while ($articles = $reponse->fetch())
				{
					?>

					<div class="row">
						<h2><a style="text-decoration:none;color:rgb(51, 51, 51);" href="article.php?article=<?php echo $articles['id'];?>"><?php echo $articles['titre'];?></a></h2>
						<p><?php echo $articles['date_creation'];?></p>
						<p><?php echo substr( $articles['contenu'] , 0 , 255);?> [...]</p>
						<p><a href="article.php?article=<?php echo $articles['id'];?>">Lire plus</a></p>
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
						$nombre_pages  = ceil($nombre_articles / 5);
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
							<a href="blog.php?page=<?php echo $previous;?>" aria-label="Previous">
       							<span aria-hidden="true">&laquo;</span>
      						</a>
      					</li>
      					<?php

						for ($i = 1 ; $i <= $nombre_pages ; $i++)
						{
   							?><li class="<?php if ($i == $page) { echo "active";} ?>"><a href="blog.php?page=<?php echo $i;?>"><?php echo $i;?></a></li><?php
						}?>
						<li>
      						<a href="blog.php?page=<?php echo $next;?>" aria-label="Next">
        						<span aria-hidden="true">&raquo;</span>
      						</a>
    					</li>
				</ul>
			</nav>
		</div>
		<div class="col-md-4 col-md-push-2">
			<div class="well">
				<h4>Vidéos récentes</h4>
				<ul>
			<?php 
				$reponse = $bdd->query('SELECT * FROM articles WHERE video = 1 ORDER BY id DESC LIMIT 0, 20');
				
				while ($articles = $reponse->fetch())
				{
					?>

					<li><a style="text-decoration:none;color:rgb(51, 51, 51);" href="article.php?article=<?php echo $articles['id'];?>"><?php echo $articles['titre'];?></a></li>
		
				<?php } 

				$reponse->closeCursor();
			?>
				</ul>
			</div>
		</div>
	</div>
</div>

