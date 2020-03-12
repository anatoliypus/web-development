<?php 
  header('Content-Type: text/plain');
  
  $numbers = '1234567890';
  $password = getGETParameter('password');
  $reliability = 0;
  if ($password !== null) 
  {
    $reliability = 4 * strlen($password);
	$uppersAmount = 0;
	$lowersAmount = 0;
	$numbersAmount = 0;
	$rePassword = "";
	for ($i = 0; $i < strlen($password); $i++) 
	{ 
      if (stripos($numbers, $password[$i]) !== false) 
	  {
      $reliability += 4;
      $numbersAmount++;
	  }
	  if (mb_strtolower($password[$i]) !== $password[$i] & stripos($numbers, $password[$i]) === false) 
	  {
	  	$uppersAmount += 1;
	  }
	  if (mb_strtolower($password[$i]) == $password[$i] & stripos($numbers, $password[$i]) === false) 
	  {
		  $lowersAmount += 1;
	  }
	  
	  if (stripos($rePassword, $password[$i]) === false)
	  {
		  $rePassword = $rePassword.$password[$i];
	  }
	}
	
	$reAmount = 0;
	for ($i = 0; $i < strlen($rePassword); $i++) 
	{
		if (substr_count($password, $rePassword[$i]) > 1) 
		{
			$reAmount += substr_count($password, $rePassword[$i]);
		}
	}
	
	$reliability -= $reAmount;
    $lettersAmount = $lowersAmount + $uppersAmount;
	
    if ($lettersAmount == 0 & $numbersAmount != 0)
    {
      $reliability -= strlen($password);
    }
	
    if ($lettersAmount != 0 & $numbersAmount == 0)
    {
      $reliability -= strlen($password);
    }
	
    $reliability += (strlen($password) - $lowersAmount) * 2;
    $reliability += (strlen($password) - $uppersAmount) * 2;
  }
  
  echo $reliability;
  
  function getGETParameter($parameter): ?string 
  {
    return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
  }