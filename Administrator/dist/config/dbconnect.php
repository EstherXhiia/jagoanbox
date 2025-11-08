<?php
ini_set('display_errors',1);
session_start();

// $userdb='root';
$host='localhost';
// $passdb='';
// $dbselect='penawaran_';
$userdb='root';
// $host='111.221.42.98';
$passdb='';
$dbselect='jagoanbox';
$base_url="http://localhost:8080/jagoanbox/Administrator/";

$formatter = new NumberFormatter('en_US', NumberFormatter::DECIMAL);

$con=mysqli_connect($host,$userdb,$passdb,$dbselect);

?>
