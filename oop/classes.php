<?php

class A {
    protected $a = 1;
    function a() {echo $this->a++;}
}

class B extends A {
    protected $a = 10;
    function b() {echo $this->a++; $this->a();}
}

$b = new B();
$b->b(); //10111213

// --------------------------------------------------
/*
class myClass {
    public $member = "ABC";
    static function showMember(){
        var_dump($this->member);
    }
}
myClass::showMember();//Fatal error: Using $this when not in object context
*/
// --------------------------------------------------
class Me {
    const NAME = "Ricardo";
}
class MiniMe extends Me {}
echo MiniMe::NAME; //Ricardo -> Constante não precisa ser estatico para o acesso. Herda normalmente

// --------------------------------------------------
abstract class absClass {
    abstract function executar();
}

abstract class absClassB extends absClass {
    function executar() {}
}