<?php
// class and object
class Demo
{
    public $myname;
    function say_hello()
    {
        echo "Welcome to Function";
        echo $this->myname;
    }
}
//say_hello();
$obj=new demo;
$obj->say_hello();
echo $obj->myname="Punit 1";




?>