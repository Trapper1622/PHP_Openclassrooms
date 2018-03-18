<?php
try {
  $bdd = new PDO("mysql:host=localhost;dbname=exerciceopc;charset=utf8", "root", "");
}
catch(Exeption $e) {
  die ("Erreur : " .$e->G=getMessage());
}
