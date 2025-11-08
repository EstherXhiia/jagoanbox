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
  $size = sizeof($_POST);
  $array_keys = array_keys($_POST);
  for($i=0;$i<$size;$i++){

    if($i!=($size-1)){
      $as .= $array_keys[$i]."= '".$_POST[$array_keys[$i]]."', ";
    }else {
      $as .= $array_keys[$i]."= '".$_POST[$array_keys[$i]]."'";
    }
  }


  $query = "update ".$_GET['mod']." set ".$as." where id = '".$_POST['id']."' ";
  // echo $query;
  if ($con->query($query) === TRUE) {
    echo json_encode(array('status'=>'00','msg'=>'Data Berhasil di Update!'));
  } else {
    echo json_encode(array('status'=>'01','msg'=>'Data Gagal di Update!'));
  }

 ?>
