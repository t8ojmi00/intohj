<?php include "menu.php"; ?>
<h2>GET data</h2>
<p>
  Get data on seuraava:
  <?php print_r($_POST); ?>
</p>
<p>
<?php
  echo 'Etunimi on '.$_GET['en']
 ?>
</p>
<p>
<?php
  echo 'Sukunimi on '.$_GET['sn']
 ?>
</p>
<?php include "footer.php"; ?>
