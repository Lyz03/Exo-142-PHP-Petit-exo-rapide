<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>

<?php
    // part 1
    echo "le texte de votre choix";

    echo "<br>";
    // part 2
    $var = "Une chaîne de caractère";

    echo $var;

    echo "<br>";
    // part 3
    $array = ["entrée 1", "entrée 2", "entrée 3", "entrée 4"];

    echo $array[1];

    echo "<br>";
    // part 4
    for ($i = 0; $i <= 3; $i++) {
        echo $array[$i] . "<br>";
    }
    ?>

    <ul>
        <?php
            // part 5
            foreach ($array as $value) {
                echo "<li>$value</li>";
            }
        ?>
    </ul>

</body>
</html>