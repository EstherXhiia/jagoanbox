
<?php

      include ('../dist/config/dbconnect.php');

      $qulog="SELECT * FROM ".$_GET['mod']." where id='$_GET[id]'";
      // echo $qulog;
      $res=mysqli_query($con, $qulog);
      $row=mysqli_fetch_assoc($res);

      if(empty($row)){
        echo json_encode(array('status'=>'01','msg'=>'Tidak Ada Data'));
      }else{
        echo json_encode(array('status'=>'00','msg'=>$row));
      }
 ?>
