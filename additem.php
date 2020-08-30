<?php
require('bdaccess.php');
require('classes.php');

$name = $_POST["name"];
$price = intval($_POST["price"]);
$quantity = intval($_POST["quantity"]);

if(isset($name) && isset($price) && isset($quantity)){

  $set_name = empty($name) ? "Empty name" : $name;
  $set_price = empty($price) ? 0 : $price;
  $set_quantity = empty($quantity) ? 0 : $quantity;

  $data = [
    'name' => $set_name,
    'price' => $set_price,
    'quantity' => $set_quantity,
  ];
  $sql = "INSERT INTO items (name, price, quantity) VALUES (:name, :price, :quantity)";
  $stmt= $pdo->prepare($sql);
  $stmt->execute($data);

  $variable = 'json';
  ReturnJson::$variable($data);
}

?>
