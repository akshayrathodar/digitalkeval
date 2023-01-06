<?php 

require './vendor/autoload.php';

$pdf = new TCPDF();
$pdf->setTitle('Gajanan');

$images = array("1.png", "2.png", "3.png");

foreach ($images as $key => $value) {
    $pdf->AddPage();
    $pdf->Image($value, $x = '', $y = '', $w = 0, $h = 0, $type = '', $link = '', $align = '', $resize = false, $dpi = 300, $palign = 'C', $ismask = false, $imgmask = false, $border = 0, $fitbox = false, $hidden = false, $fitonpage = false, $alt = false, $altimgs = array());
}

$pdf->Output('gajanan.pdf','I');

?>