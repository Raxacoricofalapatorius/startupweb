<?php session_start();
if (!empty($_SESSION['pseudo'])) {
 ?> 
 <!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Héberger une image - Admin Novus Studio</title>

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
          <h1>Ajouter une image</h1>
          <p>Attention à bien rennomer votre image avant l'hébergement.</br>
            Vous pourrez ensuite acceder à votre image, notament pour l'inclure dans un article, avec le lien :</br>
             http://novus-studio.fr/img/articles/nomdemonimage.extension .</p>
             <div class="alert alert-danger" role="alert"><strong>Attention</strong> à ne pas utiliser un nom déjà existant.</div>
          
        </div>

		<form class="form-horizontal" action="uploadaction.php" method="post" enctype="multipart/form-data">
        	<fieldset>
        		<div class="row">
            <div class="col-md-7 col-md-offset-1">
        			<div class="form-group">
                        <label class="col-md-2 control-label" for="monfichier">Image</label>  
                        <div class="col-md-10">
                			<input type="file" name="monfichier" />
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
              </div>
        	<fieldset>
		</form>

    <div class="row">
      <div class="col-md-12"><div class="alert alert-info" role="alert"><strong>Liste des images existantes</strong></div></div>
      <?php
        $dirname = '../img/articles/';
        $dir = opendir($dirname); 

        while($file = readdir($dir)) 
        {
          if($file != '.' && $file != '..' && !is_dir($dirname.$file))
          {
            echo '<div class="col-md-3"><a href="'.$dirname.$file.'">'.$file.'</a></div>';
          }
        }

        closedir($dir);
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