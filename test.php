<?php
include "class1.php";
include "class2.php";
$class=new class1();
function a(class1 $a){
    $a->bb();
}
a($class);
//$class2=new class2();

