<!-- FEATVIDEOS
================================================== -->
<div class="container">
<?php
  $reponse = $bdd->query('SELECT * FROM articles WHERE feat = 1 ORDER BY id DESC LIMIT 0,3 ');

  while ($articles_feat = $reponse->fetch())
  {

    ?>

<div class="row">
  <div class="col-sm-6 col-md-4">
    <a href="article.php?article=<?php echo $articles_feat['id'];?>">
      <div class="thumbnail">
        <img src="<?php echo $articles_feat['image'];?>" alt="...">
        <div class="caption">
          <h3><a style="text-decoration:none;color:rgb(51, 51, 51);" href="article.php?article=<?php echo $articles_feat['id'];?>"><?php echo $articles_feat['titre'];?></a></h3>
        </div>
      </div>
    </a>
  </div>



 <?php } $reponse->closeCursor(); ?>


</div>


