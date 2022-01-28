<?php

class Connection {
  public static function connect() {
    require 'helpers/const.php';
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
    $pdo->exec('set nammes utf8');
    return $pdo;
  }
}