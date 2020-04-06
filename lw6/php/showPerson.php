<?php 

  error_reporting(E_ERROR | E_PARSE);
  $request = $_SERVER{'REQUEST_METHOD'};

  if ($request == 'POST') 
  {
    $email = $_POST['email'];
  } else 
  {
    $email = $_GET['email'];
  }

  if (!empty($email)) 
  {
    $fp = fopen('../data/'.mb_strtolower($email).".txt", 'r');
    if ($fp) 
    {
      echo "<ul>";
      for ($i = 1; $i <= 5; $i++) 
      {
        $str = fgets($fp);
        if (strlen($str) > 2) 
        {
          echo "<li>".$str."</li>";
        }
      } 
      echo "</ul>";
    } else 
    {
      echo 'No such user';
    }
  }