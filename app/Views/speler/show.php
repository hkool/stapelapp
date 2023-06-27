<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spelers</title>
</head>
<body>

<?php
    $image_urls = array();

    $base_url = base_url();
    
    foreach ($spelers as $speler) {
        $kleurimg = $speler['kleur'];
        $naam = $speler('naam');
        $image_url = $base_url . "/" . $kleurimg . ".png";
        $image_urls[] = $image_url;
    }
    
    foreach ($image_urls as $url) {
        echo '<form method="POST" action="/speler/aantal/kleur">';
        echo '<label>';
        echo '<input type="radio" name="kleur" value="' . $kleurimg . '">';
        echo '<img src="' . $url . '" alt="not found" style="width:7%;heigth:7%;">';
        echo "Speler $naam is de kleur $kleur";
        echo '<input type="hidden" value="' . $speler['id']. '">';
        echo '</label>';
    }
        echo '<button type="submit">Selecteer kleur</button>';
        echo '</form>';
    
?>

    <?php foreach ($spelers as $speler) { // voor elke speler in de array spelers vanuit de controller
        $kleur = $speler['kleur']; // de kleur van de speler pakken gebaseerd op de index van de for loop
        $naam = $speler['naam']; // de naam pakken van de speler van de corresponderende input
        echo "Speler $naam is de kleur $kleur<br>";
    } ?>
</body>
</html>
