<?php
/** @var $list */
include_once('.list.php');

$arTemplateParameters = [];
foreach ($list as $key => $value) {
    $arTemplateParameters[$key] = [
        'NAME' => $value,
        'COLS' => 50
    ];
}
