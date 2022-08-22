<?php 

include './vendor/autoload.php';
include './config.php';

use chillerlan\QRCode\{QRCode, QROptions};
use chillerlan\QRCodeExamples;

$presenca = filter_input(INPUT_POST, 'presenca', FILTER_SANITIZE_STRING);
$materia = filter_input(INPUT_POST, 'materia', FILTER_SANITIZE_STRING);

$url = URL . $materia;
echo $url;

$options = new QROptions([
    'version' => 5, //versao do QRCode
    'eccLevel' => QRCode::ECC_L, //Error Correction Feature Level L
    'outputType' => QRCode::OUTPUT_IMAGE_PNG, //setando o output como PNG
    'imageBase64' => false //evitando que seja gerado a imagem em base64
    ]);

    $qrcode = new QRCode($options);
    
    file_put_contents('image.png',(new QRCode($options))->render($url)); //salvando a imagem como png
?>