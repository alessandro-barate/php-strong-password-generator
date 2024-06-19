<?php

// $generated_password = $_GET['generated-password'];
if (isset($_GET['length'])) {
    $length = $_GET['length'];
    $generated_password = generatePassword($length);
};

function generatePassword($length){
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';
    $my_password = '';
    for ($i = 0; $i < $length; $i++) {
        $my_password = $characters
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>

<body>
    <header>
        <div>
            <h1>Password Generator</h1>
        </div>
    </header>

    <main>
        <section>
            <div>
                <form action="index.php" method="GET">
                    <div>
                        <label for="length">Digita la quantità di caratteri voluti nella password</label>
                        <input type="number" id="length" name="length">
                    </div>
                    <div>
                        <button>Genera password</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

</body>

</html>