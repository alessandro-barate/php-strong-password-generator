<?php


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
                        <label for="generated-password"></label>
                        <input type="text" id="generated-password" name="generated-password">
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