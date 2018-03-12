<?php
require_once("src/qrcode.php");
use Endroid\QrCode\QrCode;
$qr=new QrCode();
$qr->setText("https://github.com/chahtasham123/")
    ->setSize(180)
    ->setPadding(10)
    ->setForegroundColor(["r"=>1,'g'=>100,'b'=>201])
    ->setBackgroundColor(["r"=>245,'g'=>245,'b'=>245]);
            $qr->render();
            
            

?>