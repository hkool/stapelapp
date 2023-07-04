<!DOCTYPE html>
<html>
<head>
    <title>Score player</title>
    <style>
        canvas {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h1 id="player" data-player-id="<?= $speler_id ?>">Speler #<?= $speler_id ?></h1>
<canvas id="myCanvas" width="400" height="400"></canvas>

<script>
    // Get the canvas element
    const canvas = document.getElementById('myCanvas');
    const context = canvas.getContext('2d');
    const player_id = document.getElementById('player').dataset.playerId;

    // Inspired by https://javascript.info/xmlhttprequest
    let xhr = new XMLHttpRequest();
    xhr.open('GET', '/score/categories/' + player_id);
    xhr.responseType = 'json';
    xhr.send();

    // the response is json
    xhr.onload = function () {
        // Define the parts with their names and colors
        let parts = xhr.response;
        // console.log(xhr.response); // Testing purposes

        // Calculate the center of the canvas
        const centerX = canvas.width / 2;
        const centerY = canvas.height / 2;

        // Calculate the radius of the circle
        const radius = Math.min(centerX, centerY) - 10;

        // Calculate the angle for each part
        const angle = (2 * Math.PI) / parts.length;

        // Draw the border of the circle
        context.beginPath();
        context.arc(centerX, centerY, radius, 0, 2 * Math.PI);
        context.closePath();
        context.lineWidth = 2;
        context.strokeStyle = 'black';
        context.stroke();

        // Draw the parts
        parts.forEach((part, index) => {
            // Calculate the start and end angles for the current part
            const startAngle = index * angle;
            const endAngle = startAngle + angle;

            // Set the fill color based on the criteria (isFilled)
            context.fillStyle = part.isFilled ? part.kleur : 'white';

            // Draw the part as a sector of the circle
            context.beginPath();
            context.moveTo(centerX, centerY);
            context.arc(centerX, centerY, radius, startAngle, endAngle);
            context.closePath();
            context.fill();

            // Draw the border between the parts
            context.beginPath();
            context.arc(centerX, centerY, radius, startAngle, endAngle);
            context.lineWidth = 1;
            context.strokeStyle = 'black';
            context.stroke();

            // Add the part name as text
            context.fillStyle = 'black';
            context.font = '16px Arial';
            context.textAlign = 'center';
            context.textBaseline = 'middle';
            const textAngle = startAngle + angle / 2;
            const textX = centerX + Math.cos(textAngle) * radius / 2;
            const textY = centerY + Math.sin(textAngle) * radius / 2;
            context.fillText(part.naam, textX, textY);
        });
    };
</script>
</body>
</html>
