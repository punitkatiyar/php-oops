<?php
class Demo{
    function __construct()
    {
        echo "<h1>This is app 1</h1>";
    }
    function app2()
    {
        echo "<h1>This is app 2</h1>";
    }
    function __destruct()
    {
        echo "<h1>This is app 3</h1>";
    }
}
$obj=new demo;

$obj->app2();





?>