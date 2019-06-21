<!-- Titre de la page -->
<?php $title = 'Dernier chapitre'; ?>

<!-- Contenu de la page -->
<?php ob_start(); ?>

<h1>Billet simple pour l'Alaska</h1>
<br />

<h3>Dernier chapitre publié :</h3>
<br />

<h4><?php echo $lastPost['title'] ?></h4>
<br />
<p align="right">Publié le : <?php echo $lastPost['added_datetime_fr'] ?> <br />
<p><?php echo html_entity_decode($lastPost['content']) ?> </p>
<p align="right"><?php echo $lastPost['author'] ?> </p>
<a href="?controller=PostController&action=showAction&id=<?= $lastPost['id'] ?>" title="Lire les commentaires">Lire les commentaires</a>
<hr>

<?php $content = ob_get_clean(); ?>

<!-- Vue requise -->
<?php require('views/template.php'); ?>
