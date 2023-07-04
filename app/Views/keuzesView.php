<!DOCTYPE html>
<html>
<head>
    <title>Vragen</title>
    <style>
        .vraag {
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php if (!isset($gekozenKanten)) : ?>
        <h1>Kies een kant</h1>
        <?php echo form_open(base_url('keuzescontroller/index')); ?>
        <?php echo csrf_field(); ?>
        <label for="kant">Kies een kant:</label>
        <select name="kant" id="kant">
            <?php foreach ($kanten as $option): ?>
                <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="submit" value="Selecteren">
        <?php echo form_close(); ?>
    <?php endif; ?>

    <?php if (isset($gekozenKanten)) : ?>
        <h1>Gekozen kanten</h1>
        <ul>
            <?php foreach ($gekozenKanten as $kant) : ?>
                <li><?php echo $kant; ?></li>
            <?php endforeach; ?>
        </ul>

        <?php if (isset($vragen) && count($vragen) > 0) : ?>
            <h1>Vragen</h1>
            <?php $randomVraag = array_rand($vragen); ?>
            <div class="vraag">
                <?php echo $vragen[$randomVraag]['vraagtekst']; ?>
            </div>

            <?php echo form_open(base_url('keuzescontroller/nieuwe_kant')); ?>
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
            <input type="hidden" name="vraag_id" value="<?php echo $vragen[$randomVraag]['vraag_id']; ?>">
            <input type="text" name="answer" placeholder="Antwoord" required>
            <button type="submit">Beantwoord</button>
            <?php echo form_close(); ?>
        <?php else: ?>
            <p>Geen vragen beschikbaar</p>
        <?php endif; ?>

        <?php echo form_open(base_url('keuzescontroller/reset')); ?>
        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
        <button type="submit">Reset Vragen</button>
        <?php echo form_close(); ?>

        <?php if (isset($beantwoord) && $beantwoord) : ?>
            <h1>Kies een nieuwe kant</h1>
            <?php echo form_open(base_url('keuzescontroller/nieuwe_kant')); ?>
            <?php echo csrf_field(); ?>
            <label for="kant">Kies een kant:</label>
            <select name="kant" id="kant">
                <?php foreach ($kanten as $option): ?>
                    <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" value="Selecteren">
            <?php echo form_close(); ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php echo form_open(base_url('keuzescontroller/reset')); ?>
    <?php echo csrf_field(); ?>
    <input type="submit" value="Reset kanten">
    <?php echo form_close(); ?> 

</body>
</html>
