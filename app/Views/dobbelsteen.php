
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
<?php 
include 'dobbelsteen.css';
?>
</style>
</head>
<body>
<div class="roll">
<div class="dice">
    <ol class="die-list even-roll" data-roll="1" id="die-1">
      <li class="die-item" data-side="1">
        <span class="dot"></span>
      </li>
      <li class="die-item" data-side="2">
        <span class="dot"></span>
        <span class="dot"></span>
      </li>
      <li class="die-item" data-side="3">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </li>
      <li class="die-item" data-side="4">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </li>
      <li class="die-item" data-side="5">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </li>
      <li class="die-item" data-side="6">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </li>
    </ol>
</div>
<p>The random number is: <?php echo $getal; ?></p>

<button type="button" id="roll-button">Roll Dice</button>
</div>

<script>
var dice = {
  sides: 6,
  roll: function () {
    //random nummer moet uit php komen.
    var randomNumber = <?= $getal ?>;
    return randomNumber;
    console.log(randomNumber)
  }
};

var button = document.getElementById('roll-button');
button.onclick = function() {
  var die = document.getElementById('die-1');
  die.classList.remove('odd-roll');
  void die.offsetWidth;
  die.classList.add('odd-roll');
  var result = dice.roll();
  die.dataset.roll = result;
  console.log(result)
};
</script>


</body>
</html>
