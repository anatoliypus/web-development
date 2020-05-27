<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . '/../src/config/config.php');

function database(): PDO 
{
    try 
    {
        static $connection = null;
        if ($connection === null) 
        {
            $connection = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        }
        return $connection;
    } 
    catch(PDOException $e) 
    {
        echo $e->getMessage();
    }
}

function saveUser(array $data): void 
{   
    database()->query('USE lw11');

    $name = $data['name'];
    $email = $data['email'];
    $subject = $data['subject'];
    $message = $data['message'];

    $stm = database()->query("SELECT * FROM user WHERE user_email = '$email'");
    $sameEmailUsersAmount = $stm->rowCount();

    $sql = '';

    if ($sameEmailUsersAmount == 0) {
        $sql = "INSERT INTO user (user_name, user_email, user_subject, user_message)
                VALUES ('$name', '$email', '$subject', '$message');";
        
    } 
    else 
    {
        $sql = "UPDATE user SET user_name = '$name', user_subject = '$subject', user_message = '$message'
                WHERE user_email = '$email'";
    }
    database()->query($sql);
}

function getUser(string $email): array
{
    database()->query('USE lw11');
    $stm = database()->query("SELECT * FROM user WHERE user_email = '$email'");
    $result = $stm->fetch(PDO::FETCH_ASSOC);
    return $result;
}