
<?php

      include ('../dist/config/dbconnect.php');

      // $qulog="SELECT * FROM ".$_GET['mod']." where id='$_GET[id]'";
      $qulog="SELECT sb.id, sb.menu_header_id, mh.title as menu_title, sb.title, sb.description, sb.img_url FROM sub_menu sb LEFT JOIN menu_header mh ON sb.menu_header_id = mh.id where sb.id ='$_GET[id]'";
      // echo $qulog;
      $res=mysqli_query($con, $qulog);
      $row=mysqli_fetch_assoc($res);

      if(empty($row)){
        echo json_encode(array('status'=>'01','msg'=>'Tidak Ada Data'));
      }else{
        echo json_encode(array('status'=>'00','msg'=>$row));
      }
 ?>
