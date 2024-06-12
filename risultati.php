<?php
$psw_length=$_GET["psw_length"];
$new_psw=[];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>php-result-psw</title>
</head>

<body>
    <p>la psw è lunga <?php echo $psw_length ?> caratteri</p>
    <hr>
    <p><?php
    //creo ciclo che stampa x tante volte quanto il valore di psw_length
    for ($i=0; $i <$psw_length ; $i++) { 
        //ad ogni giro aggiungo una x dentro all'array
         array_push($new_psw,"x"); 
    };
    //stampo la psw completa tramite implode 
     echo implode($new_psw);
    ?> 
    </p>
</body>

</html>