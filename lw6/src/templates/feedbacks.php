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
        echo '<h1>' . $args["error_msg"] . '</h1>';
    } 
    else 
    {
        foreach($args['vals'] as $val)
        {
            echo '<li>' . $val . '</li>';
        }
    }
    ?>
  </ul>
</body>
</html>