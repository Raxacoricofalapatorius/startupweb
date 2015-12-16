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
    <title>Création d'article - Admin Novus Studio</title>

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
          <h1>Création d'un article</h1>
          <p><a class="btn btn-warning btn-lg" href="index.php" role="button"><?php if (isset($_POST['id'])){ ?>Retour<?php } else{ ?>Annuler<?php } ?></a></p>
    </div>
		

    <form class="form-horizontal" action="confirmpost.php" method="post">
                            <fieldset>
                                <div class="col-md-7 col-md-offset-1">
                        
                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-2 control-label" for="titre">Titre</label>  
                                      <div class="col-md-10">
                                      <input id="titre" name="titre" type="text" class="form-control input-md" maxlength="255">
                                      </div>
                                    </div>

                                    <!-- Textarea -->
                                    <div class="form-group">
                                      <label class="col-md-2 control-label" for="contenu">Contenu</label>
                                      <div class="col-md-10">                     
                                        <textarea class="form-control" id="contenu" name="contenu" style="min-height:350px;"></textarea>
                                      </div>
                                    </div>

                                    <!-- Prepended checkbox -->
                                    <div class="form-group">
                                      <label class="col-md-2 control-label" for="video">Vidéo</label>
                                      <div class="col-md-10">
                                        <div class="input-group">
                                          <span class="input-group-addon">     
                                              <input type="checkbox" id="is_video" name="is_video" />     
                                          </span>
                                          <input id="video" name="video" class="form-control" type="text" />
                                        </div>
                                        
                                      </div>
                                    </div>

                                   <!-- Button (Double) -->
                                    <div class="form-group">
                                      <div class="col-md-8">
                                        <a class="btn btn-warning" href="index.php" role="button">Annuler</a>
                                        <button type="submit" id="send" name="send" class="btn btn-success">Valider</button>
                                      </div>
                                    </div>


                                </div>
                                <div class="col-md-4"

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-3 control-label" for="categorie">Catégorie</label>  
                                      <div class="col-md-9">
                                      <input id="categorie" name="categorie" type="text" class="form-control input-md" maxlength="255" >
                                        
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-3 control-label" for="auteur">Auteur</label>  
                                      <div class="col-md-9">
                                      <input id="auteur" name="auteur" type="text" class="form-control input-md" value="<?php echo $_SESSION['pseudo'];?>" maxlength="255">
                                        
                                      </div>
                                    </div>


                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-3 control-label" for="image">Lien de l'image</label>  
                                      <div class="col-md-9">
                                      <input id="image" name="image" type="text" class="form-control input-md" >
                                        
                                      </div>
                                    </div>


                                    <!-- Multiple Checkboxes (inline) -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="feat">Mis en avant</label>
                                      <div class="col-md-4">      
                                        <input type="checkbox" name="feat" id="feat">
                                      </div>
                                    </div>

                                    

                                    

                                </div>
                            </fieldset>
                        </form>


      </div>

  <?php include('include/footer.php'); ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php } ?>