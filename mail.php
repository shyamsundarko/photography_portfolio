<!-- This PHP code isnt used because I am deploying using github only-->

<?php
    
    $name = $_POST['name'];
    $contact =$_POST['contact'];
    $email = $_POST['emailAddress'];
    $message = $_POST['message'];
    $to = "shyamsundarko@gmail.com";
    $subject = "Mail from client";
    $body = "Client Name: ".$name ."\r\n Contact number: ".$contact . "\r\n Email: ".$email . "\r\n Message: ".$message;
    $headers = "From: noreply@shyamsundarko.com";
    
    $response= mail($to, $subject, $body, $headers);

    if($email!=NULL){
        $response= mail($to, $subject, $body, $headers);
        if($response){
            header("Location: index.php");
        }
        else{
            printf($body);
        }
    }
    
   
?>