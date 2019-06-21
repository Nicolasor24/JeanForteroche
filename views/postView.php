<!-- Titre de la page -->
<?php $title = $post->getTitle() ?>

<!-- Contenu de la page -->
<?php ob_start(); ?>

<!-- Billet -->
<p><a href="?controller=PostController&action=indexAction">Retour</a></p>

<h1>Billet simple pour l'Alaska</h1><br />

<!-- Billet -->
<h3><?php echo html_entity_decode($post->getTitle()) ?></h3><br />
<p align="right">Publié le <?php echo $post->getAddedDatetime() ?></p>
<p><?php echo html_entity_decode($post->getContent()) ?></p>
<p align="right"><?php echo html_entity_decode($post->getAuthor()) ?></p><br />
<hr>

<h4>Commentaires :</h4><br />
<?php
// Pour chaque commentaire appartenant au billet
foreach ($comments as $comment) {
    echo "<br />";
    echo "<p> De : " . html_entity_decode($comment->getAuthor()) . ", Commentaire ajouté le : " . $comment->getAddedDatetime() . "</br>";
    echo html_entity_decode($comment->getContent()) . "<br />";
    echo '<a href="?controller=PostController&action=alertCommentAction&id=' . $comment->getId() . '&post_id=' . $comment->getPostId() . '" onclick="return(confirm(\'Souhaitez-vous vraiment signaler ce commentaire ?\'))">Signaler</a>';
    echo "<br />";
}
?>
<hr>

<h4>Ajouter un commentaire : </h4><br />
<form action="?controller=PostController&action=addCommentAction&id=<?php echo $_GET['id'] ?>" method="post">
    <label for="author"> Pseudo : </label></br>
    <input type="text" id="author" name="author" class="form-control" value="<?php if(isset($_COOKIE['author'])) { echo $_COOKIE['author']; } ?>"/></br>
    <label for="content">Commentaire : </label></br>
    <textarea id="content" name="content" class="form-control" value=""></textarea></br>
    <button class="btn btn-primary">Envoyer</button>
</form>
<br/>
<hr>

<?php $content = ob_get_clean(); ?>

<!-- Requiert le fichier template.php -->
<?php require('views/template.php'); ?>