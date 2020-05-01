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

    $nameNotContainsDigits = TRUE;

    $nameArr = str_split($name);

    foreach ($nameArr as $char)
    {
      if (is_numeric($char))
      {
        $nameNotContainsDigits = FALSE;
      }
    }

    $cond = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($nameNotContainsDigits and $cond and name != null) 
    {
        $fp = fopen('../src/data/'.mb_strtolower($email).'.txt', 'w');
        $str = $name;
        fwrite($fp, 'Name: '.$str."\r\n");
        $str = $email == null ? 'not stated' : $email;
        fwrite($fp, 'Email: '.$str."\r\n");
        $str = $subject == null ? 'not stated' : $subject;
        fwrite($fp, 'Subject: '.$str."\r\n");
        $str = $message == null ? 'not stated' : $message;
        fwrite($fp, 'Message: '.$str."\r\n");
        $success = ['success' => TRUE, 'email' => TRUE, 'name' => TRUE];
        echo json_encode($success);
    } else 
    {
        $errors = ['success' => FALSE];
        if ($name == null or ! $nameNotContainsDigits) {
            $errors['name'] = FALSE;
        } else 
        {
            $errors['name'] = TRUE;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errors['email'] = FALSE;
        } else 
        {
            $errors['email'] = TRUE;
        }
        echo json_encode($errors);
    }
}