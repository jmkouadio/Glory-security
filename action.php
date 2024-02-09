<?php

if(!empty($_POST)){
    extract($_POST);
    $commune = strip_tags($commune);
    $nom = strip_tags($nom);
   
    $errors = array();

    if(empty($nom)){
      echo "Entrer le nom";
    }

  
}

?>