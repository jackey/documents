<?php
class A {
    public $testA = 1;
}  

class B {
    public $testB = "class B";
}  

$a = new A;
$b = $a;     
$b->testA = 2;

$c = new B;
$a = $c;

$a->testB = "Changed Class B";

echo "<br/> object a: "; var_dump($a);// testB->"Changed Class B"
echo "<br/> object b: "; var_dump($b); // testA->"2"
echo "<br/> object c: "; var_dump($c);// testB->"Changed Class B"

// by reference 

$aa = new A;
$bb = &$aa;
$bb->testA = 2;

$cc = new B;
$aa = $cc;

$aa->testB = "Changed Class B";

echo "<br/> object aa: "; var_dump($aa);// testB->"Changed Class B"
echo "<br/> object bb: "; var_dump($bb);// testB->"Changed Class B"
echo "<br/> object cc: "; var_dump($cc);// testB->"Changed Class B"

?>
