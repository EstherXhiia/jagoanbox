<?php
  include("../dist/config/dbconnect.php");


  if(isset($_POST['description'])){
    $_POST['description'] = str_replace("'","\'",$_POST['description']);
    $_POST['description'] = str_replace('"','\"',$_POST['description']);
  }else if(isset($_POST['qualifications'])){
    $_POST['qualifications'] = str_replace("'","\'",$_POST['qualifications']);
    $_POST['qualifications'] = str_replace('"','\"',$_POST['qualifications']);
  }else if(isset($_POST['responsibilities'])){
    $_POST['responsibilities'] = str_replace("'","\'",$_POST['responsibilities']);
    $_POST['responsibilities'] = str_replace('"','\"',$_POST['responsibilities']);
  }

  $as="";
  $ak="";
  $size = sizeof($_POST);
  $array_keys = array_keys($_POST);
  for($i=0;$i<$size;$i++){

    if($i!=($size-1)){
      // $as .= $_POST[$array_keys[$i]]."', ";
      $ak .= $array_keys[$i].", ";
      $as .= "'".$_POST[$array_keys[$i]]."', ";
    }else {
      $ak .= $array_keys[$i];
      $as .= "'".$_POST[$array_keys[$i]]."'";
    }
  }

  $query = "INSERT INTO ".$_GET['mod']." (". $ak .") values (".$as.") ";
  // echo $query;
  if ($con->query($query) === TRUE) {
    echo json_encode(array('status'=>'00','msg'=>'Data Berhasil di Input!'));
  } else {
    echo json_encode(array('status'=>'01','msg'=>'Data Gagal di Proses!'));
  }

 ?>
