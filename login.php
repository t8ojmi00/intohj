<?php include "menu.php"; ?>
<?php
  $annettu_salasana=$_POST['password'];
  $annettu_tunnus=$_POST['username'];
  $oikea_salasana='sala12';
  if($annettu_salasana == $oikea_salasana) {
    session_start();
    $SESSION['logged_in']=true;
    $SESSION['username']=$annettu_tunnus;
    echo '<p>Tervetuloa, olet kirjautunut sisään.</p>';
  }
  else {
    echo '<p>Tunnus tai salasana väärin</p>';
  }
 ?>
 <?php include "footer" ?>
