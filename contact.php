<?php $contact = true; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact - Novus Studio</title>

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
  <?php include('include/carousel.php'); ?>
  <div class="container staff">
    <div class="row">
      <div class="col-sm-6  col-lg-4 col-md-4">
        <img class="img-circle" src="img/amelie.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2 id="amelie">Amélie MARTINS</h2>
        <h5>Secrétaire / Trésorière</h5>
        <p>Fan de Docor Who et du seigneur des anneaux. Autrice, scénariste, 1ère assistant réalisateur, actrice principale dans nos projets, journaliste/reporter d'investigation sur le terrain Magnanvillois, s'occupe aussi de l'administration de l'assiciation. Très occupée et toujours présente, dans tous nos projets.</p>
        <p><a class="btn btn-default" href="mailto:martinsa@novus-studio.fr" role="button">martinsa@novus-studio.fr</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-sm-6 col-lg-4 col-md-4">
        <img class="img-circle" src="img/dylan.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2 id="dylan">Dylan GUELTON</h2>
        <h5>Président / Fondateur</h5>
        <p>Fan de Doctor Who et de Stargate. Auteur, scénariste, réalisateur, monteur, acteur de l'association tout en s'occupant de la diriger et de la représenter, notament en tant que représentant des associations au Conseil d'Administration de l'OMMASEC. Bref, très occupé et investit dans tous les projets de l'association.</p>
        <p><a class="btn btn-default" href="mailto:gueltond@novus-studio.fr" role="button">gueltond@novus-studio.fr</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-sm-6 col-lg-4 col-md-4">
        <img class="img-circle" src="img/thibault.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2 id="thibault">Thibault BRUN</h2>
        <h5>Vice-président</h5>
        <p>Fan de Doctor Who et de Sherlock. Auteur, scénariste, assistant réalisateur et acteur pour l'association. Acteur principal de notre web série The Samurai, et de beaucoup de nos projets, très investit dans nos projets audiovisuels.</p></br>
        <p><a class="btn btn-default" href="mailto:brunt@novus-studio.fr" role="button">brunt@novus-studio.fr</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div>

 
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm" style="height:591px;">
                <?php if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['destinataire']) && isset($_POST['message'])) { ?>
                    <?php include('include/contactaction.php');?>
                <?php }
                else { ?>
                        <form class="form-horizontal" method="post" action="contact.php">
                            <fieldset>
                                <legend class="text-center header">Nous Contacter</legend>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="nom" name="nom" type="text" placeholder="Nom" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="prenom" name="prenom" type="text" placeholder="Prénom" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="tel" name="tel" type="tel" placeholder="Téléphone" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <select id="destinataire" name="destinataire" class="form-control">
                                            <option>-- Destinataire --</option>
                                            <option value="contact">Contact Général</option>
                                            <option value="dylan">Dylan GUELTON - Président</option>
                                            <option value="amelie">Amélie MARTINS - Secrétaire/Trésorière</option>
                                            <option value="thibault">Thibault BRUN - Vice-président</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <textarea class="form-control" id="message" name="message" placeholder="Votre message" rows="7"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
    <?php } ?>    
    </div>
</div>
        
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="text-center header" style="padding-top:19px;padding-right:19px;padding-left:19px;height:78px;">Nous rencontrer</div>
                    <div class="panel-body text-center">
                        <div>
                        Salle Marcel Carné</br> (au dessus de la bibliothèque),</div>
                        <br/><div>
                        "La Ferme", Rue de la Ferme,</br>
                        78200 Magnanville<br />
                        06 52 52 17 40<br />
                        contact@novus-studio.fr<br />
                        </div>
                        <hr />
                        <div id="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://maps.googleapis.com/maps/api/js"></script>

<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(48.967344, 1.680233),
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        var marker = new google.maps.Marker({
                position: myLocation,
                title: "Novus Studio - Salle Marcel Carné"
            });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>


<style>
    #map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }
</style>



  <?php include('include/footer.php'); ?>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>