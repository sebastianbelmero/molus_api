<?php

$opt2 = ['Kuala Lumpur', 'Jakarta', 'Singapore', 'Manila'];
$opt3 = ['Ya', 'Tidak'];

$json2 = [];
$json3 = [];

foreach ($opt2 as $key => $value) {
    $json2[] = [
        'option' => $value,
    ];
}

foreach ($opt3 as $key => $value) {
    $json3[] = [
        'option' => $value,
    ];
}

echo json_encode($json2);