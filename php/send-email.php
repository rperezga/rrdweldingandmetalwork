<?php

    foreach ($_POST as $key => $value) {
        if($key == 'name'){
            $name = $value; 
        }
        if($key == 'email'){
            $email = $value; 
        }
        if($key == 'message'){
            $message = $value; 
        }
    }

    require_once('phpmailer/PHPMailerAutoload.php');

    $mail = new PHPmailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';
    $mail->isHTML();
    $mail->Username = 'rperezga@gmail.com';
    $mail->Password = 'Adajul!@';


    $mail->SetFrom('new-work@rrdweldingandmetalwork.com');
    $mail->Subject = "New Customer Request!";
    $mail->Body = "    
    <h2>Hello Danierky:</h2>
    <p>You have a new request from RRD Welding and Metal Work.</p>
    <p><strong>NAME: </strong>" .$name. "</p>
    <p><strong>EMAIL: </strong>" .$email. "</p>
    <p><strong>MESSAGE: </strong>" .$message. "</p>
    <p>Thank you!</p>
    ";
    $mail->AddAddress('danierkyrr@yahoo.com');
    //$mail->AddAddress('rperezga@gmail.com');
    $mail->Send();

?>


<!DOCTYPE html>
<html>
<head>
<style>
    body {
        background-color: rgb(245, 243, 243);
        margin: 0;
        border: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
    }
    header {
        text-align: center;     
    }
    header img{
        width: 250px;
        margin-top: 50px;
    }
    section{
        width: 90%;
        margin: 20px auto;
    }
    h1{
        font-size: 60px;
    }
    p{
        font-size: 22px;
        color: rgb(44, 43, 43);
    }
    a{
        text-decoration: none;
        font-size: 16px;
    }
    .goback{
        margin-top: 80px;
    }
</style>
</head>
<body>
    <header>
        <img src="../images/logo.png" alt="RRD Welding and Metalwork logo">
    </header>

    <section>
        <h1>THANK YOU!</h1>
        <p>Thank you very much for filling that our form.</p>
        <p>You will be contacted as soon as possible in reference to your request.</p>
        <div class="goback"><a href="../index.html">Get back to your homepage</a></div>
    </section>

</body>
</html>


