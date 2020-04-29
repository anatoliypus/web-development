<?php
function saveFeedbackPage(): void 
{
    if (getRequestMethod() == 'GET')
    {
        $name = getGetParameter('name');
        $email = getGetParameter('email');
        $subject = getGetParameter('subject');
        $message = getGetParameter('message');

    } 
    else
    {
        $name = getPostParameter('name');
        $email = getPostParameter('email');
        $subject = getPostParameter('subject');
        $message = getPostParameter('message');
    }

    $cond = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($cond and $name != null and !ctype_digit($name[0])) 
    {
        $fp = fopen('../src/data/'.mb_strtolower($email).'.txt', 'w');
        $str = $name;
        fwrite($fp, 'Name: '.$str.'\r\n');
        $str = $email == null ? 'not stated' : $email;
        fwrite($fp, 'Email: '.$str.'\r\n');
        $str = $subject == null ? 'not stated' : $subject;
        fwrite($fp, 'Subject: '.$str.'\r\n');
        $str = $message == null ? 'not stated' : $message;
        fwrite($fp, 'Message: '.$str.'\r\n');
        renderTemplate('main.php', ['scroll' => TRUE, 'success' => TRUE]);
    } else 
    {
        if ($email == null) 
        {
            renderTemplate('main.php', ['error_msg' => 'Type email!', 'scroll' => TRUE]);
        } else if ($name == null) {
            renderTemplate('main.php', ['error_msg' => 'Type name!', 'scroll' => TRUE]);
        } else if (ctype_digit($name[0])) 
        {
            renderTemplate('main.php', ['error_msg' => 'Wrong name!', 'scroll' => TRUE]);
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            renderTemplate('main.php', ['error_msg' => 'Wrong email!', 'scroll' => TRUE]);
        }
    }
}
    
