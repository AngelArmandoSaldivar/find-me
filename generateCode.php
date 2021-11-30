<?php

header("Content-Type: image/png");
require "vendors/autoload.php";

use Endroid\QrCode\QrCode;

$qrcode = new QrCode($_GET['text']);

echo $qrcode->writeString();
die();

?>