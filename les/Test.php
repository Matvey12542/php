<?php
use A\sub\les\main;

/**
 * Created by PhpStorm.
 * User: kolya
 * Date: 11.02.14
 * Time: 13:08
 */

include_once 'base.php';
/**
 * Class Test
 * @package A\sub\les
 */
class Test extends base {
  protected $name;
  protected $surname;

  function __construct($name, $surname) {
    $this->name = $name;
    $this->surname = $surname;
  }


  /**
   * @param $test_val
   * @return mixed
   */
  public function getName() {
    return $this->Test(TRUE);
  }

  /**
   * @param mixed $name
   */
  public function setName($name) {
    $this->name = $name;
  }

  private function _private_f() {

}


}

$name = new Test(' ','');


$name = getName();

$re = new Main();

$i = $i++;