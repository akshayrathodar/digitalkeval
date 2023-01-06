<?php 

require './vendor/autoload.php';
require_once './function.php';

header('Access-Control-Allow-Origin: *');

$message = [];

if(isset($_GET) && $_GET['ids']) {
    $pageLayout = array(800, 800);
    $pdf = new TCPDF('p', 'pt', $pageLayout, true, 'UTF-8', false);
    $pdf->setTitle('Gajanan');

    $images = explode(",",$_GET['ids']);
    // pre pdf
    for ($i=1; $i < 6; $i++) { 
        $pdf->AddPage();
        $pdf->Image('./images/pre-defined/800x800_Glossy_vol_01_pages-to-jpg-00'.add_leading_zero($i).'.jpg', $x = '0', $y = '0', $w = 800, $h = 650);    
    }

    foreach ($images as $key => $value) {
        $pdf->AddPage();
        $pdf->Image('./images/800x800_Glossy_vol_01_pages-to-jpg-00'.add_leading_zero($value).'.jpg', $x = '0', $y = '0', $w = 800, $h = 650);    
    }

    // post pdf
    $pdf->Image('./images/pre-defined/800x800_Glossy_vol_01_pages-to-jpg-0056.jpg', $x = '0', $y = '0', $w = 800, $h = 650);    

    $pdf->Output('gajanan.pdf','I');
} else {
    array_push($message,['status'=> 'Error','message'=> 'In Correct Data']);
}


?>