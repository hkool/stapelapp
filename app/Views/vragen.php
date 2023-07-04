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
    <div class="vraag">
        <!-- vraagtekst weergeven -->
        <?php echo $huidigeVraag->vraagtekst; ?>
    </div>
        <!-- antwoord formulier -->
    <form action="" method="post">
        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
        <!-- hidden input met de vraag id -->
        <input type="hidden" name="vraag_id" value="<?php echo $huidigeVraag->vraagId; ?>">
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
