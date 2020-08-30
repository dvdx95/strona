<?php
  try
  {
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'koks123', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
  }
  catch ( PDOExeption $e )
  {
    echo 'ERROR: ' . $e->getMessage();
  }
?>
