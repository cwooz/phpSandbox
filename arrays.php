<?php
  #Array - Variable that holds multiple values

  /*
    -Indexed
    -Associative
    -Multi-Dimensional
  */

  // Indexed
  $people = array('Kevin', 'Jeremy', 'Sara');
  $cars = ['Honda', 'Toyota', 'Ford'];
  $cars[3] = 'Chevy';
  $cars[] = 'BMW';

  echo $people[2];
  echo $cars[1];
  echo $cars[4];

  echo count($cars);
  print_r($cars);
  var_dump($cars);


  // Associative
  $people = array('Brad' => 35, 'Jose' => 32);
  $ids = [22 => 'Brad', 44 => 'Jose'];
  $people['Jill'] = 42;

  echo $people['Brad'];
  echo $ids[22];
  print_r($people);
  var_dump($people);


  //Multi
  $cars2 = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12),
  );

  echo $cars2[1][0];

?>