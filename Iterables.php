<?php

function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

$arr = ["1", "2", "3"];
printIterable($arr);

?>