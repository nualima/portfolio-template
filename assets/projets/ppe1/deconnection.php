<?php 
session_destroy ();

echo "la session est fermé.";
header('Location: ./index.php');
  exit();
