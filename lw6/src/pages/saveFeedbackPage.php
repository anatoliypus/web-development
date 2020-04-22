<?php
    function saveFeedbackPage() 
    {
      if (getRequestMethod() == "GET")
      {
          $name = getGetParameter("name");
          $email = getGetParameter("email");
          $subject = getGetParameter("subject");
          $message = getGetParameter("message");

      } 
      else
      {
          $name = getPostParameter("name");
          $email = getPostParameter("email");
          $subject = getPostParameter("subject");
          $message = getPostParameter("message");
      }

      if ($email != null) 
      {
        $fp = fopen("../src/data/".mb_strtolower($email).".txt", 'w');
        $str = $name == null ? 'not stated' : $name;
        fwrite($fp, "Name: ".$str."\r\n");
        $str = $email == null ? 'not stated' : $email;
        fwrite($fp, "Email: ".$str."\r\n");
        $str = $subject == null ? 'not stated' : $subject;
        fwrite($fp, "Subject: ".$str."\r\n");
        $str = $message == null ? 'not stated' : $message;
        fwrite($fp, "Message: ".$str."\r\n");
        renderTemplate("main.php", ["scroll" => TRUE, "success" => TRUE]);
      } else 
      {
        renderTemplate("main.php", ["error_msg" => "Wrong email!", "scroll" => TRUE]);
      }
    }
    
