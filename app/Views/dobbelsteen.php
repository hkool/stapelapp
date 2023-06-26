<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style {csp-style-nonce}>
* {
  margin: 0;
  padding: 0;
  
}

textarea{font-size:1.5em}

h1 a
{
color:white;text-decoration-style: dotted;	
}
html {
  font-family: system-ui, sans-serif;
}
main {
  /*display: grid;
  grid-template-columns: 1fr;*/
	margin-top:30px;
  height: 99vh;
  width: 100%;
}

ol
{
margin-bottom:2em	
}

body {
  background-repeat: repeat;
}

.die-item{background-color: #FFF;}

.dice {
  align-items: center;
  display: grid;
  grid-gap: 2rem;
  grid-template-columns: repeat(auto-fit, minmax(8rem, 1fr));
  grid-template-rows: auto;
  justify-items: center;
  padding: 2rem;
  perspective: 600px;
}
.die-list {
  height: 6rem;
  list-style-type: none;
  position: relative;
  transform-style: preserve-3d;
  width: 6rem;
}
.odd-roll {
  transition: transform 4s ease-out;
}
.die-item {
  box-shadow: inset -0.35rem 0.35rem 0.75rem rgba(0, 0, 0, 0.3),
    inset 0.5rem -0.25rem 0.5rem rgba(0, 0, 0, 0.15);
  display: grid;
  grid-template-areas: "one two three" "four five six" "seven eight nine";
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(3, 1fr);
  height: 100%;
  padding: 1rem;
  position: absolute;
  width: 100%;
}
.dot {
  align-self: center;
  background-color: #676767;
  border-radius: 50%;
  box-shadow: inset -0.15rem 0.15rem 0.25rem rgba(0, 0, 0, 0.5);
  display: block;
  height: 1.25rem;
  justify-self: center;
  width: 1.25rem;
}
.odd-roll[data-roll="1"] {
  transform: rotateX(-360deg) rotateY(-720deg) rotateZ(-360deg);
}
.odd-roll[data-roll="2"] {
  transform: rotateX(-270deg) rotateY(-720deg) rotateZ(-360deg);
}
.odd-roll[data-roll="3"] {
  transform: rotateX(-360deg) rotateY(-810deg) rotateZ(-360deg);
}
.odd-roll[data-roll="4"] {
  transform: rotateX(-360deg) rotateY(-630deg) rotateZ(-360deg);
}
.odd-roll[data-roll="5"] {
  transform: rotateX(-450deg) rotateY(-720deg) rotateZ(-360deg);
}
.odd-roll[data-roll="6"] {
  transform: rotateX(-360deg) rotateY(-900deg) rotateZ(-360deg);
}
[data-side="1"] {
  transform: rotate3d(0, 0, 0, 90deg) translateZ(4rem);
}
[data-side="2"] {
  transform: rotate3d(-1, 0, 0, 90deg) translateZ(4rem);
}
[data-side="3"] {
  transform: rotate3d(0, 1, 0, 90deg) translateZ(4rem);
}
[data-side="4"] {
  transform: rotate3d(0, -1, 0, 90deg) translateZ(4rem);
}
[data-side="5"] {
  transform: rotate3d(1, 0, 0, 90deg) translateZ(4rem);
}
[data-side="6"] {
  transform: rotate3d(1, 0, 0, 180deg) translateZ(4rem);
}
[data-side="1"] .dot:nth-of-type(1) {
  grid-area: five;
}
[data-side="2"] .dot:nth-of-type(1) {
  grid-area: one;
}
[data-side="2"] .dot:nth-of-type(2) {
  grid-area: nine;
}
[data-side="3"] .dot:nth-of-type(1) {
  grid-area: one;
}
[data-side="3"] .dot:nth-of-type(2) {
  grid-area: five;
}
[data-side="3"] .dot:nth-of-type(3) {
  grid-area: nine;
}
[data-side="4"] .dot:nth-of-type(1) {
  grid-area: one;
}
[data-side="4"] .dot:nth-of-type(2) {
  grid-area: three;
}
[data-side="4"] .dot:nth-of-type(3) {
  grid-area: seven;
}
[data-side="4"] .dot:nth-of-type(4) {
  grid-area: nine;
}
[data-side="5"] .dot:nth-of-type(1) {
  grid-area: one;
}
[data-side="5"] .dot:nth-of-type(2) {
  grid-area: three;
}
[data-side="5"] .dot:nth-of-type(3) {
  grid-area: five;
}
[data-side="5"] .dot:nth-of-type(4) {
  grid-area: seven;
}
[data-side="5"] .dot:nth-of-type(5) {
  grid-area: nine;
}
[data-side="6"] .dot:nth-of-type(1) {
  grid-area: one;
}
[data-side="6"] .dot:nth-of-type(2) {
  grid-area: three;
}
[data-side="6"] .dot:nth-of-type(3) {
  grid-area: four;
}
[data-side="6"] .dot:nth-of-type(4) {
  grid-area: six;
}
[data-side="6"] .dot:nth-of-type(5) {
  grid-area: seven;
}
[data-side="6"] .dot:nth-of-type(6) {
  grid-area: nine;
}

button {
  align-self: center;
	margin-right:0.5em;
  background-color: #efefef;
  border: none;
  color: #333;
  font-size: 1.25rem;
  font-weight: 700;
  justify-self: center;
  padding: 0.5rem 1rem;
}
button:hover {
  cursor: pointer;
}
    </style>
</head>
<body>
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
