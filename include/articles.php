
<!-- ARTICLES
================================================== -->

<div class="row title-articles-row">
	<div class="col-lg-12 panel panel-default" style="padding:0px;">
		<div class="panel-heading">
			<h2>Articles récents</h2>
		</div>
	</div>
</div>
<div class="container staff">
	<div class="row articles-row">

<?php
	$reponse = $bdd->query('SELECT * FROM articles ORDER BY id DESC LIMIT 0,4 ');

	while ($articles = $reponse->fetch())
	{
?>

		
		<a href="article.php?article=<?php echo $articles_feat['id'];?>">
			<div class="col-lg-3 img-article">
				<img class="thumbnail" src="<?php echo $articles['image'];?>"/>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h6 class="panel-title"><a style="text-decoration:none;color:rgb(51, 51, 51);" href="article.php?article=<?php echo $articles['id'];?>"><?php echo $articles['titre'];?></a></h6>
					</div>
				</div>
				<div class="contenu-article">
					<?php echo substr( $articles['contenu'] , 0 , 255);?> [...]
				</div>
			</div>
		</a>
		<?php } $reponse->closeCursor(); ?>
	</div>
</div>


<div class="container staff">
	<div class="row articles-row">

<?php
	$reponse = $bdd->query('SELECT * FROM articles ORDER BY id DESC LIMIT 4,4 ');

	while ($articles = $reponse->fetch())
	{
?>

		<div class="col-lg-3 img-article">
			<img class="thumbnail" src="<?php echo $articles['image'];?>"/>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h6 class="panel-title"><?php echo $articles['titre'];?></h6>
				</div>
			</div>
			<div class="contenu-article">
				<?php echo substr( $articles['contenu'] , 0 , 255);?> [...]
			</div>
		</div>
		<?php } $reponse->closeCursor(); ?>
	</div>
</div>

