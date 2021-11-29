// Bouton Nyan Cat//

document.getElementById("cat").onclick = function() {Functioncat()};

function Functioncat() {
  var audiocat = new Audio('audio/nyancat.mp3');
  audiocat.play();
}

// Bouton quack //

document.getElementById("quack").onclick = function() {Functionquack()};

function Functionquack() {
  var audioquack = new Audio('audio/quack.mp3');
  audioquack.play();
}

// Text Contact //
$(document).ready(function () {
    $('input#input_text, textarea#textarea2').characterCounter();
});

document.getElementById("showpasswordbutton").onclick = function() {Showpassword()};

function Showpassword() {
  if (document.getElementById("showpasswordbutton").text=="visibility"){
    document.getElementById("showpasswordbutton").text="visibility_off";
    document.getElementById("password").type="text";
  }else if (document.getElementById("showpasswordbutton").text=="visibility_off"){
    document.getElementById("showpasswordbutton").text="visibility";
    document.getElementById("password").type="password";
  }
}

$(document).ready(function () {
    M.updateTextFields();
});
