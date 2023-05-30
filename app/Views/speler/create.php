<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spelers</title>
</head>
<body>
    <h2><?= esc($title) ?></h2>
    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>

    <form action="/speler/aantal" method="post">
        <?= csrf_field() ?>
        <label for="title"> Aantal spelers</label>
        <input type="input" name="aantal" value="<?= set_value('aantal') ?>">
        <input type="submit" name="submit" value="Creeer spelers">
    </form>
</body>
</html>