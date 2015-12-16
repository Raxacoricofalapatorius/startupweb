<?php
  session_start();
  if (!empty($_SESSION['pseudo'])) {
    include('include/BDD.php');
?>

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
    <?php
      if (isset($_POST['titre']) && isset($_POST['contenu']) && isset($_POST['categorie']) && isset($_POST['auteur']) && isset($_POST['image']))
      {
        $titre = htmlspecialchars($_POST['titre']);
        $contenu = $_POST['contenu'];
        $categorie = htmlspecialchars($_POST['categorie']);
        $auteur = htmlspecialchars($_POST['auteur']);
        if(empty($_POST['image'])){
          $image = "img/articles/defaut.jpg";
        }
        else{
          $image = $_POST['image'];
        }
        if (isset($_POST['feat'])) {
          $feat = 1 ;
        }
        else
        {
          $feat = 0 ;
        }


        if (isset($_POST['is_video'])) 
                {
                    $video = 1 ;
                    $lienvideo = $_POST['video'];

                    $req = $bdd->prepare('INSERT INTO articles(titre, contenu, auteur, categorie, video, lienvideo, image, feat) VALUES(:titre, :contenu, :auteur, :categorie, :video, :lienvideo, :image, :feat)');
                    $req->execute(array(
                      'titre' => $titre,
                      'contenu' => $contenu,
                      'auteur' => $auteur,
                      'categorie' => $categorie,
                      'video' => $video,
                      'lienvideo' => $lienvideo,
                      'feat' => $feat,
                      'image' => $image
                    ));
                    ?>
                    <div class="jumbotron">
                      <h1>Article créé.</h1>
                      <p><a class="btn btn-warning btn-lg" href="index.php" role="button">Retour</a></p>
                      <div class="alert alert-success" role="alert">Article créé.</div>
                    </div>
                    <?php
                }
                else
                {
                    $video = 0 ;

                    $req = $bdd->prepare('INSERT INTO articles(titre, contenu, auteur, categorie, video, image, feat) VALUES(:titre, :contenu, :auteur, :categorie, :video, :image, :feat)');
                    $req->execute(array(
                      'titre' => $titre,
                      'contenu' => $contenu,
                      'auteur' => $auteur,
                      'categorie' => $categorie,
                      'video' => $video,
                      'feat' => $feat,
                      'image' => $image
                    ));
                    ?>
                    <div class="jumbotron">
                      <h1>Article créé.</h1>
                      <p><a class="btn btn-warning btn-lg" href="index.php" role="button">Retour</a></p>
                      <div class="alert alert-success" role="alert">Article créé.</div>
                    </div>
                    <?php
                }
           
      }

        
    
    ?>


     </div>

  <?php include('include/footer.php'); ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php } ?>