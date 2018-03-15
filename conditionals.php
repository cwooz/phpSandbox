<?php
  #Conditionals

  /*
    ==
    ===
    <
    >
    <=
    >=
    !=
    !==
  */

  $num = 5;

  if($num == 5){
    echo '5 passed';
  }
echo '<br>';

  if($num >= 5){
    echo '5 passed';
  }
echo '<br>';

  if($num >= 5){
    echo '5 passed';
  } elseif($num == 6){
    echo '6 passed';
  } else {
    echo 'did not pass';
  }
  echo '<br>';

  #Logical Operatiors
  /*
    add &&
    or ||
    xor 
  */

  if($num > 4 && $num < 10){
    echo "$num passed";
  }
echo '<br>';

  #Switch

  $favColor = 'red';

  switch($favColor){
    case 'red':
      echo 'Your Favorite color is red';
      break;
    case 'blue':
      echo 'Your Favorite color is blue';
      break;
    case 'green':
      echo 'Your Favorite color is green';
      break;
    default:
      echo 'Your Favorite color is something else';
  }

?>