<?php
class Db {
  protected static $instance;

  public static function getinstance() {
    if (!isset(self::$instance)) {
      self::$instance = new PDO('mysql:host=localhost; dbname=php', 'root', '1965');

    }
    return self::$instance;
  }

  private function __construct() {}
  //private __clone() {}
  private function __wakeup() {}
}
