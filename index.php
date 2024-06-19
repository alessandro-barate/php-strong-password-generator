<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Strong Password Generator</title>
</head>

<body>
    <header>
        <div class="text-center py-5">
            <h1>Password Generator</h1>
        </div>
    </header>

    <main>
        <section>
            <div class="pt-5 ms-5 text-center">
                <form action="index.php" method="GET">
                    <div class="pb-3">
                        <label for="length">Digita la quantità di caratteri voluti nella password</label>
                        <input type="number" id="length" name="length">
                    </div>
                    <div class="button-container py-3 m-auto text-center">
                        <button class="py-2 px-4">Genera password</button>
                    </div>
                </form>
                <div>
                    <p class="py-4 text-center">La password generata è: <?php echo $generated_password ?> </p>
                </div>
            </div>
        </section>
    </main>

</body>

</html>