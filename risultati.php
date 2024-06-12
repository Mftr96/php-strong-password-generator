<?php
include_once __DIR__ . '/funzioni.php';
$psw_length = $_GET["psw_length"]?? null;
$new_psw = [];
//milestone 2:introduco array caratteri consentiti 
$consentiti = "abcdefghijklmnopqrstuvwxyz0123456789";
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
    <h1>generatore di psw</h1>
    <p>quanti caratteri vuoi nella tua password?</p>
    <!-- form in cui inserire numero caratteri  -->
    <form action="risultati.php" method="GET">
        <input type="number" name="psw_length" id="">
        <button type="submit">invia</button>
    </form>

    <p>la psw è lunga <?php echo $psw_length ?> caratteri</p>
    <p><?php
        //creo ciclo che stampa x tante volte quanto il valore di psw_length
        for ($i = 0; $i < $psw_length; $i++) {
            //ad ogni giro aggiungo una x dentro all'array
            array_push($new_psw, "x");
        };
        //stampo la psw completa tramite implode 
        echo implode($new_psw);
        ?>
    </p>
    <p>
        <?php
        //milestone 3: invoco funzione da funzioni.php per generare psw 
        f_psw($consentiti,$psw_length);
        ?>
    </p>
</body>

</html>