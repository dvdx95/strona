<?php
require('bdaccess.php');
require('classes.php');

$itemsarray = array("items" => array());
$sql = "SELECT * FROM items ORDER BY id";
foreach ($pdo->query($sql) as $value){

  $item = array(
    "id" => $value["id"],
    "name" => $value["name"],
    "price" => $value["price"],
    "quantity" => $value["quantity"]
  );
  array_push($itemsarray["items"], $item);
}

$variable = 'json';
ReturnJson::$variable($itemsarray);
