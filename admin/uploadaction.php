<?php
session_start();
if (!empty($_SESSION['pseudo'])) {

$dossier = '../img/articles/';
if(!file_exists($dossier . $_FILES['monfichier']['name']))
{

        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
        if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
        {
                // Testons si le fichier n'est pas trop gros
                if ($_FILES['monfichier']['size'] <= 1000000)
                {
                        // Testons si l'extension est autorisée
                        $infosfichier = pathinfo($_FILES['monfichier']['name']);
                        $extension_upload = $infosfichier['extension'];
                        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                        if (in_array($extension_upload, $extensions_autorisees))
                        {
                                // On peut valider le fichier et le stocker définitivement
                                move_uploaded_file($_FILES['monfichier']['tmp_name'], '../img/articles/' . basename($_FILES['monfichier']['name']));
                                }  
                
                }
        }
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
                  
                  <div class="alert alert-success" role="alert">Lien vers votre image : <a href="../img/articles/<?php echo basename($_FILES['monfichier']['name']); ?>">http://novus-studio.fr/img/articles/<?php echo basename($_FILES['monfichier']['name']); ?></a></div>
                  
                </div>


                </div>

          <?php include('include/footer.php'); ?>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="bootstrap/js/bootstrap.min.js"></script>
          </body>
        </html><?php
}
else
{       ?>
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
                  <div class="alert alert-danger" role="alert"><strong>ERREUR</strong>, ce nom est déjà utilisé. cf: <a href="../img/articles/<?php echo basename($_FILES['monfichier']['name']); ?>">http://novus-studio.fr/img/articles/<?php echo basename($_FILES['monfichier']['name']); ?></a></div>
                  
                  
                </div>


                </div>

          <?php include('include/footer.php'); ?>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="bootstrap/js/bootstrap.min.js"></script>
          </body>
        </html> <?php
}
 } ?>
