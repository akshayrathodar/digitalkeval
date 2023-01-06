<?php
$json = array(["id"=>1,'img'=> '1.png'], ["id"=>2,'img'=> '2.png'],["id"=>3,'img'=> '3.png'],["id"=>4,'img'=> '4.png'],["id"=>5,'img'=> '5.png']);
header('Access-Control-Allow-Origin: *');

print_r(json_encode($json));
exit;
?>
