<?php
  header('Content-Type: text/plain');

  function getGETParameter($parameter) {
    return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
  };

  $text = getGETParameter('text');
  $i = 0;
  $allowedSymbols = 'qwertyuiopasdfghjklzxcvbnm1234567890';
  $numbers = '1234567890';
  $cond = 'yes';
  if (stripos($numbers, $text[0]) !== false & strlen($text) != 0) $cond = 'no';
  $i++;
  while ($i < strlen($text)) {
    if (stripos($allowedSymbols, $text[$i]) === false) $cond = 'no';
    $i++;
  };
  echo $cond;
