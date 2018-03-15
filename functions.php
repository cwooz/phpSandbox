<?php
  #Functions - Block of code that can be repeatedly called

  /*
    Built in functions =>
      echo
      print_r
      var_dump
  */

  function simpleFunction(){
    echo 'hello';
  }  
  simpleFunction();

  #Function w/ param
  function sayHello($name = 'World'){
    echo "hello $name<br>";
  }
  sayHello('Joe');

  function addNumbers($num1, $num2){
    echo '<br>';
    return $num1 + $num2;
  }
  echo addNumbers(2,3);

  $myNum = 10;

  function addFive($num){
    $num += 10;
  }
  addFive($myNum);


?>