<?php

$_POST['a'] = "kok";
$_POST['ab'] = "kok1";
$_POST['ac'] = "kok2";
$_POST['ad'] = "kok3";


  $as="";
  $array_keys = array_keys($_POST);
  for($i=0;$i<sizeof($_POST);$i++){
    $as .= $array_keys[$i]."= '".$_POST[$array_keys[$i]]."', ";
  }

  echo $as;

 ?>
