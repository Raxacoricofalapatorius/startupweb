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
    <title>Supprimer - Admin Novus Studio</title>

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
          if (!!empty($_GET['confirm']) && !empty($_GET['id'])) 
          {
            ?>

            <div class="jumbotron">
              <h1>Etes-vous sûr de vouloir surpprimer l'article ?</h1>
              <p><a class="btn btn-warning btn-lg" href="index.php" role="button">Annuler</a>
              <a class="btn btn-danger btn-lg" href="delete.php?id=<?php echo $_GET['id']; ?>&confirm=ok" role="button">Confirmer</a></p>
            </div>

            <?php
          }
          elseif ($_GET['confirm'] == "ok" && isset($_GET['id']))
          {
            $id_article = $_GET['id'];
            $reponse = $bdd->prepare('DELETE FROM articles WHERE id = ?');
            $reponse->execute(array($id_article));
            ?>
            <div class="jumbotron">
              <h1>Article supprimé.</h1>
              <p><a class="btn btn-warning btn-lg" href="index.php" role="button">Retour</a>
                <div class="alert alert-danger" role="alert">Article supprimé.</div>
              </p>
            </div>
            <?php
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