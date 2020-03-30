<?php 
    header("Content-Type: text/plain");

    
    $email = getGETParameter("email");
    $first_name = getGETParameter("first_name");
    $last_name = getGETParameter("last_name");
    $age = getGETParameter("age");


    if (($email != null ) and (stripos($email, "@") != false) and (stripos($email, ".") != false) and (strlen($email) != 0)) 
    {
        $fp = fopen("data/".$email."."."txt", "w");
        fwrite($fp, "Email: ".$email."\r\n");
        if (($first_name != null) and (ctype_alpha($first_name)))
        {
            fwrite($fp, "First name: ".mb_strtoupper($first_name[0]).substr($first_name, 1)."\r\n");
        }
        if (($last_name != null) and (ctype_alpha($last_name)))
        {
            fwrite($fp, "Last name: ".mb_strtoupper($last_name[0]).substr($last_name, 1)."\r\n");
        }
        if (($age != null) and (is_numeric($age)))
        {
            fwrite($fp, "Age: ".$age."\r\n");
        }
        fclose($fp);
        echo "The data is written!";
    } 
    else 
    {
        echo "Incorrect email input!";
    }


    function getGETParameter($parameter): ?string 
    {
        return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
    }