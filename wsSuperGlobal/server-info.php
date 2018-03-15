<?php
  # $_SERVER SuperGlobal

  // Create Server Array
  $server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF']
  ];

  echo $server['Host Server Name'];
  echo '<br>';
  echo $server['Host Header'];
  echo '<br>';
  echo $server['Server Software'];
  echo '<br>';
  
  print_r($server);

  // Create Client Array
?>