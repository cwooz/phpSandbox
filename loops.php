<?php
  #Loops
  /*
    For
    While
    Do..While
    Foreach
  */

  #For
  #@params - init, condition, inc
  for($i = 0;$i < 10;$i++){
    echo $i;
    echo '<br>';
  }

  #While
  #@params - conditon
  $j = 0;

  while($j < 10){
    echo $j;
    echo '<br>';
    $j++;
  }

  #Do..While
  #@params - condition (will always run once)
  $k = 0;

  do{
    echo $k;
    echo '<br>';
    $k++;
  }

  while($k < 10);

  #For Each
  #
  $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William');

  foreach($people as $person => $email){
    echo $person.': '.$email;
    echo '<br>';
  }

?>