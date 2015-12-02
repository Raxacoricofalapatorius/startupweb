<!-- FEATVIDEOS
================================================== -->

<?php
  $reponse = $bdd->query('SELECT * FROM articles WHERE feat = 1 ORDER BY id DESC LIMIT 0,3 ');

  while ($articles_feat = $reponse->fetch())
  {

    ?>
<div class="container">
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="<?php echo $articles_feat['image'];?>" alt="...">
      <div class="caption">
        <h3><?php echo $articles_feat['titre'];?></h3>
        <p><?php echo substr( $articles['contenu'] , 0 , 255);?> [...]</p>
        <p><a href="#" class="btn btn-default" role="button">Lire plus</a></p>
      </div>
    </div>
  </div>



 <?php } $reponse->closeCursor(); ?>


</div>
</div>

