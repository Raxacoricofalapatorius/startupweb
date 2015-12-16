<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Accueil</a></li>
        <li class="active"><a href="#">Lien</a></li>
        <li class="active"><a href="#">Lien</a></li>
      </ul>
      <a class="btn btn-primary navbar-btn" href="post.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span> Créer un article</a>
      <a class="btn btn-info navbar-btn" href="upload.php"><span class="glyphicon glyphicon-upload" aria-hidden="true"> </span> Héberger une image</a>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['pseudo']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profil.php">Mon compte</a></li>
            <li><a href="logout.php">Déconnexion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>