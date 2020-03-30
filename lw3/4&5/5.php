<?php 
    header("Content-Type: text/plain");
  
    $email = getGETParameter("email");
    if (($email != null) and (strlen($email) != 0))
    {
        if (file_exists("data/".$email.".txt"))
        {
            $fp = fopen("data/".$email.".txt", "r");
            while (!feof($fp))
            {
                $str = fgets($fp, 30);
                echo $str;
            }
        }
        else 
        {
            echo "User not found!";
        }
    }
    else 
    {
        echo "Incorrect email input!";
    }


    function getGETParameter($parameter): ?string 
    {
        return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
    }