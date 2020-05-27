<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About user</title>
</head>
<body>
  <ul>
    <?php 
    if (isset($args['error_msg'])) 
    {
        echo '<h1>'.$args["error_msg"].'</h1>';
    } 
    else 
    {
        $name = $args['data']['user_name'] == '' ? 'not stated' : $args['data']['user_name'];
        $email = $args['data']['user_email'] == '' ? 'not stated' : $args['data']['user_email'];
        $subject = $args['data']['user_subject'] == '' ? 'not stated' : $args['data']['user_subject'];
        $message = $args['data']['user_message'] == '' ? 'not stated' : $args['data']['user_message'];
        
        echo '<li>' . 'Name: ' . $name . '</li>';
        echo '<li>' . 'Email: ' . $email . '</li>';
        echo '<li>' . 'Subject: ' . $subject . '</li>';
        echo '<li>' . 'Message: ' . $message . '</li>';
    }
    ?>
  </ul>
</body>
</html>