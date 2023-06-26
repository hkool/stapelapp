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
        <input type="text" name="answer" placeholder="Antwoord" required>
        <button type="submit">Beantwoord</button>
    </form>
        <!-- alle vragen -->
    <h2>Vragen</h2>
    <ul>
        <?php foreach ($vragen as $vraag): ?>
            <li><?php echo $vraag['vraagtekst']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
