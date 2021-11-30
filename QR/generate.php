<?php

header("Content-Type: image/png");
require "vendor/autoload.php";

use Endroid\QrCode\QrCode;

$qrcode = new QrCode($_GET['id']);

$qrcode
->setSize("350")->setWriterByName('png')->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0])->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0));

    echo $qrcode->writeString();

die();