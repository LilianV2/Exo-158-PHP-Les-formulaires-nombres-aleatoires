<?php

$min = $_POST['minimum'];
$max = $_POST['maximum'];

$random = mt_rand($min, $max);

echo "Nombre aléatoire généré : " . $random;