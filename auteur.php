<?php
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Billet simple pour l'Alaska">
  <meta name="author" content="Jean Forteroche">
  <title>Jean Forteroche | Auteur</title>
<!-- Bootstrap CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Styles personnalisés -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<!-- Navigation -->
<?php include('includes/header.php');?>
<!-- Contenu de la page -->
<div class="container">
<?php 
$pagetype='aboutme';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{
?>
<h1 class="mt-4 mb-3"><?php echo htmlentities($row['PageTitle'])?>
</h1>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php">Accueil</a>
  </li>
  <li class="breadcrumb-item active">Auteur</li>
</ol>
<!-- Contenu d'introduction -->
<div class="row">
  <div class="col-lg-12">
    <p><?php echo $row['Description'];?></p>
  </div>
</div>
<!--row -->
<?php } ?>
</div>
<!-- container -->
<!-- Pied de page -->
 <?php include('includes/footer.php');?>
<!-- Bootstrap  JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
