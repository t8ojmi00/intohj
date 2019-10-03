<?php include "menu.php"; ?>
<?php
  session_start();
  session_destroy();
?>
<p>
  Olet kirjautunut ulos, tervetuloa uudelleen.
</p>
<?php include "footer.php"; ?>
