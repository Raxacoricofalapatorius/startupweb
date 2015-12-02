<?php
	if (isset($_GET['article']))
	{
        $id_article = $_GET['article']; 
	}

	$reponse = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
	$reponse->execute(array($id_article));

	while ($articles = $reponse->fetch())
				{
					?>

<div class="page-header">
  <div class="container">
  	<h1><?php echo $articles['titre'];?></h1>
  </div>
</div>
<div class="container" style="margin-bottom:50px;">
	<div class="row">
		<div class="col-md-6">

					<div class="row">
						<?php
							if ($articles['video'] == 1)
							{
								echo $articles['lienvideo'];
							}
							else
							{
						?>
						<div><img src="<?php echo $articles['image'];?>" class="img-thumbnail"></div>
						<?php } ?>
						<p id="info_article"><i><?php echo $articles['date_creation'];?> | <?php echo str_replace('_', ' ', $articles['categorie']);?> | Par : <?php echo $articles['auteur'];?></i></p>
						<p><?php echo $articles['contenu'];?></p>
					</div>
		
				<?php } 

				$reponse->closeCursor();
			?>

			
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

