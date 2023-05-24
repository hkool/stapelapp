
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
<button type="button" id="roll-button">Roll Dice</button>
</div>

<script>
  <?php
  include 'dobbelsteen.js'; 
  ?>
</script>
</html>
