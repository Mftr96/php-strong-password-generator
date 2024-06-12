<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>php-strong-password-generator</title>
</head>

<body>
    <h1>generatore di psw</h1>
    <p>quanti caratteri vuoi nella tua password?</p>
    <!-- form in cui inserire numero caratteri  -->
    <form action="risultati.php" method="GET">
        <input type="number" name="psw_length" id="">
        <button type="submit">invia</button>
    </form>


</body>

</html>