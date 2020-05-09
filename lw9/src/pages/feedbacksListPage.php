<?php 

function feedbacksListPage(): void
{
    if (getRequestMethod() == 'POST') 
    {
        $email = getPostParameter('email');
    } 
    else 
    {
        $email = getGetParameter('email');
    }

    if ($email != null) 
    {
        $fp = fopen('../src/data/'.$email.'.txt', 'r');
        $strings = [];
        if ($fp) 
        {
            while (!feof($fp))
            {
                $val = fgets($fp, 999);
                if ($val != '')
                {
                    array_push($strings, $val);
                }
            }
            renderTemplate('feedbacks.php', ['vals' => $strings]);
        } 
        else 
        {
            renderTemplate('feedbacks.php', ['error_msg' => 'No such user!']);
        }
    } 
    else 
    {
        renderTemplate('feedbacks.php', ['error_msg' => 'Wrong email']);
    }
}
  