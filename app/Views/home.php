<?php

$alumni1 = [
    "nama" => 'Ihza Fikri Zaki Karunia',
    "kelas" => '3SD2',
    "angkatan" => 60,
    "asalprov" => 'Kalimantan Barat',
    'nim' => '221810336'
];

$alumni2 = [
    "nama" => 'Fulan bin Fulan',
    "kelas" => '3SD2',
    "angkatan" => 60,
    "asalprov" => 'Jawa Barat',
    'nim' => '221810332'
];



function score_kenal($data1, $data2, $acuan=['angkatan','kelas','asalprov']){
    $score = 0;
    foreach($acuan as $i){
        if($data1[$i] == $data2[$i]){
            $score++;
        }
    }
    return $score;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Keterkenalan alumni1 dan alumni2: <?= score_kenal($alumni1,$alumni2)?> </h1>
</body>
</html>