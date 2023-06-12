<!DOCTYPE html>
<html>
<head>
    <title>Kies een kant</title>
</head>
<body>
    <?php if (isset($gekozenKanten)) : ?>
        <h1>Gekozen kanten</h1>
        <ul>
            <!-- Hier begint de lus om de gekozen kanten weer te geven -->
            <?php foreach ($gekozenKanten as $kant) : ?>
                <li><?php echo $kant; ?></li>
            <?php endforeach; ?>
            <!-- Einde van de lus -->
        </ul>
    <?php endif; ?>

    <h1>Kies een kant</h1>
    <?php echo form_open('keuzescontroller/index'); ?>
        <label for="kant">Kies een kant:</label>
        <select name="kant" id="kant">
            <!-- Hier begint de lus om de opties voor de selectielijst weer te geven -->
            <?php foreach ($kanten as $option): ?>
                <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
            <?php endforeach; ?>
            <!-- Einde van de lus -->
        </select>
        <br>
        <input type="submit" value="Selecteren">
    <?php echo form_close(); ?>
</body>
</html>