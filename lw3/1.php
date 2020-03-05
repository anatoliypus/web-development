<?php
  header('Content-Type: text/plain');
  
  $text = getGETParameter('text');
  removeSpacesOut($text);  
  echo '#';

  function getGETParameter($parameter): ?string 
  {
    return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
  }
 
  function removeSpacesOut($str) 
  { 
	if (strlen($str) != 0) 
	{
      $i = 0;
      while ($i < strlen($str) - 1 & $str[$i] == ' ') $i++;
      while ($i < strlen($str) - 1) 
	  {
        if ($str[$i] != ' ') 
	    {
          echo $str[$i];
          $i++;
        } else 
	    {
          while ($str[$i] == ' ' & $i < strlen($str) - 1) $i++;
          if ($i != strlen($str) - 1) echo ' ';
        }
      }
	}
  }


