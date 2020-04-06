<?php
    header("Content-Type: text/plain");

    $request = $_SERVER['REQUEST_METHOD'];
    if ($request == "GET")
    {
        $name = getGETparameter("name");
        $email = getGETparameter("email");
        $subject = getGETparameter("subject");
        $message = getGETparameter("message");

    } 
    else if ($request == "POST")
    {
        $name = getPOSTparameter("name");
        $email = getPOSTparameter("email");
        $subject = getPOSTparameter("subject");
        $message = getPOSTparameter("message");
    }

    if (!empty($email)) 
    {
      $fp = fopen("../data/".mb_strtolower($email).".txt", 'w');
      fwrite($fp, $name."\r\n");
      fwrite($fp, $email."\r\n");
      fwrite($fp, $subject."\r\n");
      fwrite($fp, $message."\r\n");
    }

    function getGETparameter($parameter): ?string 
    {
        return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
    }
    function getPOSTparameter($parameter): ?string 
    {
        return isset($_POST[$parameter]) ? $_POST[$parameter] : null;
    }

    header('Location: ../index.php#forms');