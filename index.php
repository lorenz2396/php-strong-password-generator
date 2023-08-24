<?php
require_once __DIR__ .'/functions.php';

if (isset($_GET['psw'])) {

    $passLenght = intval($_GET['psw']);
    // var_dump($passLenght);

    $password = generatePassword($passLenght);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <main>
        <h1>
            PHP Strong Password Generator
        </h1>

        <form class="container text-center mt-5" action="index.php" method="GET">
            <div>
                <label for="psw">Lunghezza Password</label>
                <input type="number" id="psw" name="psw" max="30" min="10" value="*****">
            </div>

            <div class="my-5">
                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck1">Lettere</label>

                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck2">Simboli</label>

                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck3">Numeri</label>
            </div>

            <button type="submit" class="btn btn-primary"> Invia</button>
            <button type="reset" class="btn btn-primary">Cancella</button>

            <?php if (isset($_GET['psw'])) { ?>
                <div class="alert alert-success" role="alert">
                    La tua password è:
                    <strong>
                        <?php echo $password ?>
                    </strong>
                </div>
            <?php } ?>
        </form>
    </main>
</body>

</html>