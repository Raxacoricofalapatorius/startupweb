<!-- NAVBAR
================================================== -->
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Novus Studio</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li <?php if( $accueil == true ) { echo "class=\"active\"";}?>><a href="index.php">Accueil</a></li>
                <li <?php if( $blog == true ) { echo "class=\"active\"";}?>><a href="blog.php">Blog</a></li>
                <li <?php if( $reglement == true ) { echo "class=\"active\"";}?>><a href="reglement.php">Règlement & Statuts</a></li>
                <li <?php if( $contact == true ) { echo "class=\"active\"";}?>><a href="contact.php">Contact</a></li>

              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

