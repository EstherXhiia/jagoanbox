
<?php

      include ('../../../dist/config/dbconnect.php');

      // $qulog="SELECT * FROM ".$_GET['mod']." where id='$_GET[id]'";
      $qulog="SELECT * FROM product where showing='0'";
      // echo $qulog;
      $res=mysqli_query($con, $qulog);
      $data['status'] = '00';
      if ($res->num_rows > 0) {
		    // output data of each row
		    $i=0;
		    while($row = $res->fetch_assoc()) {
		    	$data['msg'][$i] = $row;
		    	$i++;
		        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		    }

				echo json_encode($data);
  		} else {
  		    echo json_encode(array('status'=>'01','msg'=>'error detail ini kosong'));
  		}

 ?>
