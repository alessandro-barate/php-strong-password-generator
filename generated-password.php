<?php
include 'session.php';
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>

<body>
    <main>
        <div>
            <p class="py-4 text-center">La password generata è: <?php echo $generated_password ?> </p>
        </div>
    </main>
</body>

</html>