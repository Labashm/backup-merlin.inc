<?php

$status = $_SERVER['REDIRECT_STATUS'];
$codes = array(
        403 => array('403 Forbidden', 'The server has refused to fulfill your request.'),
        404 => array('404 Not Found', 'The document/file requested was not found.'),
        405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
        408 => array('408 Request Timeout', 'Your browser failed to sent a request in the time allowed by the server.'),
        500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
        502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
        504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.')
        );
        
$title = $codes[$status][0];
$message = $codes[$status][1];
if ($title == false || strlen($status) != 3) {
    $message = 'Please supply a valid status code.';
}

echo '<p><h1>' . $title . '</h1></p>' . 
     '<p>' . $message . '</p>'; 

 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ops! - Página não encontrada | Merlin.Inc</title>

    <style>
        @import  url('https://fonts.googleapis.com/css?family=Exo+2:300,400,500,700&display=swap');

        * {
            padding: 0;
            margin: 0;
            outline: 0;
            box-sizing: border-box;
        }
        
        body {
            width: 100vw;
            height: 100vh;
            font-family: 'Exo 2', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-position: center;
            background-repeat: no-repeat;
            background-image: linear-gradient(to bottom, rgb(9,54,148), rgb(1,23,67));
        }
        
        #logo {
            width: 300px;
            height: 300px;
            background-image: url(http://coldhabbo.com.br/favicon.webp);
            background-size: cover;
        }
        
        h1 {
            color: #FFFFFF;
            text-align: center;
            text-shadow: 0 2px 2px rgba(0, 0, 0, 0.30);
            margin-top: 20px;
        }
        
        button {
            font-family: 'Exo 2', sans-serif;
            font-weight: 700;
            border: 0;
            padding: 20px 40px;
            color: #FFF;
            background: #056DDD;
            box-shadow: inset 2px 2px 0 rgba(255, 255, 255, 0.2), inset -2px -2px 0 rgba(255, 255, 255, 0.2), 0 1px 5px rgba(0, 0, 0, 0.2);
            border: 1px solid rgb(1, 15, 43);
            border-radius: 5px;
            margin-top: 30px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    
    <div id="logo"></div>
    <h1>Ops! <br>Essa página não existe ou foi deletada</h1>
    <a href="https://merlin-inc.tk"><button>Retornar para página inícial</button></a>
</body>
</html>