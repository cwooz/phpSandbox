<?php
  echo 'Hello World'; #also a comment
  print '2+2'; //slower than echo
  /*
           **multi-line comment**
  #Rules

    #Variables
    -Prefix with $
    -Start with letter or an underscore
    -Only letters, numbers and underscore
    -Case sensitive

    #Data Types
    -Strings
    -Integers
    -Floats
    -Bools
    -Arrays
    -Objects
    -NULL
    -Resource

    #Concatenate w/ . not + like JavaScript
     $greet = $string1 . $string2;

    #Constant
     define('GREETING', 'Hello Everyone');

  */

  $output = 'Hello World!!';
  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;

  $float1 = 4.4;
  $bool1 = true;

  $string1 = 'Hello';
  $string2 = 'World!';
  $greet = $string1 .' '. $string2;
  $greet2 = "$string1 $string2";

#Character Escape  \
  $string3 = 'They\'re Here';

  echo $output;
  echo $sum;
  echo $greet;
  echo $greet2;

#Constants
  define('GREETING', 'Hello Everyone');
  echo GREETING;

?>