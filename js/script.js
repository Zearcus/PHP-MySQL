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

// Bouton keken//

document.getElementById("keken").onclick = function() {Functionkeken()};

function Functionkeken() {
  var audiokeken = new Audio('audio/keken.mp3');
  audiokeken.play();
}


// Bouton Info //

document.getElementById("infobouton").onclick = function() {Functioninfo()};

function Functioninfo() {
  var audioinfo = new Audio('audio/prout.mp3');
  audioinfo.play();
}

// Screamer1 //

document.getElementById("screamerboutton1").onclick = function() {Functionscreamer1()};

function Functionscreamer1() {
  var audioscreamer1 = new Audio('audio/screamer 1.mp3');
  audioscreamer1.play();
}

// Screamer2 //

document.getElementById("screamerboutton2").onclick = function() {Functionscreamer2()};

function Functionscreamer2() {
  var audioscreamer2 = new Audio('audio/screamer 2.mp3');
  audioscreamer2.play();
}

// Modal //

$(document).ready(function(){
    $('.modal').modal();
});

// Text Contact //
$(document).ready(function () {
    $('input#input_text, textarea#textarea2').characterCounter();
});

$(document).ready(function () {
    M.updateTextFields();
});
