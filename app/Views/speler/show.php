<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spelers</title>
</head>
<body>
    <?php foreach ($spelers as $speler) { // voor elke speler in de array spelers vanuit de controller
        $kleur = $speler['kleur']; // de kleur van de speler pakken gebaseerd op de index van de for loop
        $naam = $speler['naam']; // de naam pakken van de speler van de corresponderende input
        echo "Speler $naam is de kleur $kleur<br>";
    } ?>
</body>
</html>
