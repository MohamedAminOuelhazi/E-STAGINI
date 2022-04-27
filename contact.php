<?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    $phone=$_REQUEST['phone'];
    if (($name=="")||($email=="")||($message=="")||($phone==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("e.stagini1@gmail.com", $subject, $message, $from);
        echo "Email sent!";
        }
    }  
?>