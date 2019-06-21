<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jean Forteroche">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/contenu.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <!-- Tinymce -->
     <script src="public/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            mode : "textareas",
            editor_selector : "mceEditor"
        });
    </script> 
   


  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight"> Jean </span> Forteroche </h1>
        </div>
        <nav class="navbar">
          <ul>
            <li class="current"><a href="index.php">Accueil</a></li>
            <li><a href="?controller=PostController&action=indexAction" title="Chapitres">Chapitres</a></li>
            <li><a href="?controller=PostController&action=about" title="Biographie">Auteur</a></li>
            <?php
            if(isset($_SESSION) && empty($_SESSION)){
            ?>
            <li><a href="?controller=UserController&action=loginAction" title="Se connecter">Connexion</a></li>
            <?php
          }
            ?>
            <?php
            if(isset($_SESSION) && !empty($_SESSION))
            {
              ?>
            <li><a href="?controller=AdminController&action=indexAction" title="Espace d'administration">Administration</a></li>
            <li><a href="?controller=UserController&action=logoutAction" title="Se déconnecter">Déconnexion</a></li>
            <?php
          }
            ?>
          </ul>
      </nav>
    </div>
  </header>
  <section id="showcase">
    <div class="container">
      <h1 class="title1" id="title2">Billet simple pour l'Alaska</h1>
      <p>Un roman de Jean Forteroche</p>
    </div>
  </section>
  <section id="newsletter">
    <div class="container">
      <h1>BIENVENUE SUR MON SITE</h1>
    </div>
  </section>
  <div class="container">
<!-- Contenu de la page -->
<?= $content ?>
  </div>
  <footer>
    <p> Jean Forteroche, auteur et écrivain,  Copyright &copy; 2019</p>
  </footer>
</body>
</html>
