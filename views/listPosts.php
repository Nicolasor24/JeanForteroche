<!-- Titre de la page -->
<?php $title = 'Liste des chapitres'; ?>

<!-- Contenu de la page -->
<?php ob_start(); ?>

<h1>Billet simple pour l'Alaska</h1><br />

<h3>Chapitres récents :</h3><br />

<?php
while ($post = $posts->fetch())
{
    ?>
        <h4><?= (html_entity_decode($post['title'])) ?></h4>
        <p>Publié le <?= $post['added_datetime_fr'] ?></p>
        <!--Limite le nombre de caractères du contenu affichés à l'accueil-->
        <p><?= substr (nl2br(html_entity_decode($post ['content'])), 0, 250) . '...' ?>
        <a href="?controller=PostController&action=showAction&id=<?= $post['id'] ?>" title="Lire le billet" >Lire la suite</a></p>
        <br />
    <?php
}
$posts->closeCursor();
?>
<hr>

<?php $content = ob_get_clean(); ?>

<!-- Vue requise -->
<?php require('views/template.php'); ?>
