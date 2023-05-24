var dice = {
    sides: 6,
    roll: function () {
      //random nummer moet uit php komen.
      var randomNumber = Math.floor(Math.random() * this.sides) + 1;
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