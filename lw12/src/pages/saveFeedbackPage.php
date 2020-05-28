<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/../src/utils/database.php');

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

    if ($nameNotContainsDigits and $cond and $name != null) 
    {
        $data = array('name' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message);
        saveUser($data);
        $success = ['success' => TRUE, 'email' => TRUE, 'name' => TRUE];
        echo json_encode($success);
    } 
    else 
    {
        $errors = ['success' => FALSE];
        if ($name == null or ! $nameNotContainsDigits) {
            $errors['name'] = FALSE;
        } 
        else 
        {
            $errors['name'] = TRUE;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errors['email'] = FALSE;
        } 
        else 
        {
            $errors['email'] = TRUE;
        }
        echo json_encode($errors);
    }
}