<?php
/*
abstract class contain atleast one abstract function
abstract function : must declare but not implement
abstract class could not create object
abstract class , child class must contain abstract function
*/
abstract function bank{
  abstract function id_prof();
}

class sbi extends bank{
  function test()
  {
    echo "Test Function";
  }
}

?>
