<?php 
$servername = "localhost";
$username = "id17436345_yesica";
$password = "q(]Yy4jcy^4()5+U";
$dbname = "id17436345_databse";

function validar(){
    session_start();
if (empty($_SESSION["nombre"]))
{
  echo "Se detecto un acceso ilegal al sistema, su ip esta siendo monitoreada y sera enviada a la policia";
  ?>
  <a href="http://localhost/crud/">Sitio de login</a>
  <?php
  exit();
}
}

?>