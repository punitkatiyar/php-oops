<?php
class Demo{
    public $dev="Punit";
    function __construct($data)
    {
        echo "<h1>Welcome to  $data $this->dev</h1>";
    }
    function app2($data)
    {
        echo "<h1>This is $data</h1>";
    }
    function __destruct()
    {
        echo "<h1>Bye Bye {$this->dev} </h1>";
    }
}
//$obj1=new demo;
$obj2=new demo("OOPS Module 1");
$obj2->dev="Code With Punit";
//$obj2->app2("OOPS Module 2");







?>