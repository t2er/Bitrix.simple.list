<?php
$list = [
    'code' => 'value'
];

$arTemplateParameters = [];
foreach ($list as $key => $value) {
    $arTemplateParameters[$key] = [
        'NAME' => $value,
        'COLS' => 50
    ];
}
