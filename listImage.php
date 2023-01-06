<?php

require_once './function.php';

$json = [];



for ($i=6; $i < 56; $i++) { 
    array_push($json,['id'=>$i,'img'=>'/images/800x800_Glossy_vol_01_pages-to-jpg-00'.add_leading_zero($i).'.jpg']);
}

header('Access-Control-Allow-Origin: *');

print_r(json_encode($json));
exit;
?>
