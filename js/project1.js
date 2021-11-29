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

// Parallax //

$(document).ready(function () {
    $('.parallax').parallax();
});

// Carrousel //

$(document).ready(function () {
    $('.carousel').carousel({

    });
});

// Modal //

$(document).ready(function () {
    $('.modal').modal();
});
