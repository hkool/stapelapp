<?php echo form_open('keuzescontroller/index'); ?>
    <?php echo csrf_field(); ?>

    <h1>Kies een kant</h1>
    <label for="kant">Kies een kant:</label>
    <select name="kant" id="kant">
        <?php foreach ($kanten as $option): ?>
            <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <input type="submit" value="Selecteren">
<?php echo form_close(); ?>

<?php if (isset($gekozenKanten)) : ?>
    <h1>Gekozen kanten</h1>
    <ul>
        <?php foreach ($gekozenKanten as $kant) : ?>
            <li><?php echo $kant; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php echo form_open('keuzescontroller/reset'); ?>
    <?php echo csrf_field(); ?>
    <input type="submit" value="Reset kanten">
<?php echo form_close(); ?>

