<!-- Titre de la page -->
<?php $title = 'À propos de l\'auteur'; ?>

<!-- Contenu de la page -->
<?php ob_start(); ?>

<h1>Biographie</h1>
<br/>
<br/>
<br/>
<p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet semper lacus in interdum. Suspendisse in sodales purus. Aliquam vel viverra risus. Nunc eu sem rutrum, scelerisque quam sed, congue augue. Maecenas id convallis eros. Nunc gravida erat non tristique blandit. Pellentesque id auctor risus.

Suspendisse porta est nec nibh cursus, ut dapibus ligula pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempus imperdiet orci. Phasellus at ullamcorper quam. Ut euismod quam sed nisl tempus, vel ullamcorper sem maximus. Vestibulum condimentum viverra orci, a tincidunt neque. Donec ut dictum leo, ac rhoncus tortor. Nulla porttitor ipsum eros, sed pharetra diam consequat quis. Fusce venenatis sagittis turpis, in mattis libero facilisis fringilla. Cras nisl ex, elementum ut scelerisque quis, blandit in libero.
</p>
<p>
    Proin nec leo sit amet lacus tincidunt suscipit. Duis ut lobortis tellus. In eget euismod eros, ac fermentum diam. Nulla viverra maximus ipsum, in pretium ante viverra eget. Vestibulum et lacus enim. Sed maximus ut turpis sed imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat, tortor eu auctor fringilla, odio quam viverra tellus, id dapibus nulla ante sit amet elit. Pellentesque suscipit et tellus id viverra. Fusce non urna suscipit, efficitur elit sit amet, consectetur elit. Mauris euismod non turpis ut bibendum. Cras ut fermentum tellus.


</p>
<p>
    Nam tincidunt nibh sed semper euismod. Vestibulum luctus libero a tellus elementum venenatis. Nam volutpat, tellus facilisis iaculis ullamcorper, massa lorem ornare lacus, non mattis enim lacus sit amet mauris. Nullam a laoreet dolor. Maecenas id commodo magna. Suspendisse pretium rhoncus arcu nec sodales. Sed porttitor, turpis sit amet maximus tincidunt, risus lorem auctor tellus, eget sollicitudin urna erat at odio. Sed et arcu vel lacus ultricies varius. Morbi tempor sapien vitae nibh finibus, vel interdum nisi euismod. Nulla purus purus, porta at sem dictum, convallis molestie velit. Etiam faucibus dolor nec justo fringilla, et hendrerit mi vestibulum. Aliquam suscipit luctus felis sit amet vestibulum.

Vestibulum elementum et nunc quis venenatis. Maecenas auctor varius erat, in sollicitudin lorem sollicitudin ac. Aenean in nisi orci. Aenean diam turpis, faucibus non sodales ut, hendrerit at felis. Suspendisse tempus quam in leo consectetur, a commodo orci pretium. In hac habitasse platea dictumst. Aenean finibus lacus sem. Integer felis neque, tincidunt quis tellus vehicula, accumsan laoreet urna. In semper sollicitudin commodo. Curabitur at mi id enim suscipit dapibus. Duis ac pulvinar erat. Nam dui metus, elementum nec turpis vitae, ornare pharetra ipsum. Phasellus sed nulla sed metus pellentesque fringilla. Vestibulum nec ultrices nunc, quis fermentum leo.
</p>
<hr>

<?php $content = ob_get_clean(); ?>

<!-- Vue requise -->
<?php require('views/template.php'); ?>
