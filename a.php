<?php
namespace A\sub;
use A\sub\B;
require_once "b.php";

class ClassA {
  public function show() {
    echo "from A";
  }
}



$a = new B\classA;
$a->show();
echo '<br>'. __NAMESPACE__;

watchdog('Kolya_debug', $var);