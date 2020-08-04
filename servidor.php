<?php

$obj = array();
$item = new stdClass();
$item->value = 1;
$item->text = "a";
$obj[] = $item;

$item = new stdClass();
$item->value = 2;
$item->text = "b";
$obj[] = $item;

$item = new stdClass();
$item->value = 3;
$item->text = "c";
$obj[] = $item;

echo json_encode($obj);
?>