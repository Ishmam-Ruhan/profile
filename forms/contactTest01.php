<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "ishmamruhan97@gmail.com"
    $email_subject = "New Email from Github Portfolio";
    $email_body = "User Name: $name\n"."User Email: $visitor_email"."User Message: .\n";

    $to = "ishmamruhan@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers.="Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>