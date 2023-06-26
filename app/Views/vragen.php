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
        <!-- random vraag -->
        <?php $randomVraag = array_rand($vragen); ?>
        <div class="vraag">
            <?php echo $vragen[$randomVraag]['vraagtekst']; ?>
        </div>


    <form action="" method="post">
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
    <input type="hidden" name="vraag_id" value="<?php echo $vragen[$randomVraag]['vraag_id']; ?>">
        <input type="text" name="answer" placeholder="Antwoord" required>
        <button type="submit">Beantwoord</button>
    </form> <br>
        <!-- reset vragen -->
    <form action="/reset" method="post">
        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
        <button type="submit">Reset Vragen</button>
    </form>
    
</body>
</html>
