<?php
// Incluimos la liberia que hemos subido a la carpeta libs
include('../phpqrcode/qrlib.php');

// Averiguamos url del establecimiento
//$link = $store->getWeb();
  QRcode::png('PHP QR Code :)');
// Exportamos una imagen llamándola storeID.png a la carpeta qr/
//QRcode::png($link, "qr/". $store->ID .".png", QR_ECLEVEL_L, 10, 2);

// Mostramos la imagen creada (QR de la web del establecimiento)
//echo "<div><img src='/qr/". $store->ID .".png'/></div>";

?>