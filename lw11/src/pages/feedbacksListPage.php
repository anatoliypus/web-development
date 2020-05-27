<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . '/../src/utils/database.php');

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
        renderTemplate('feedbacks.php', ['data' => getUser($email)]);
    } 
    else 
    {
        renderTemplate('feedbacks.php', ['error_msg' => 'Wrong email']);
    }
}
  