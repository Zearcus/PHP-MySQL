// Text Contact //
$(document).ready(function () {
    $('input#input_text, textarea#textarea2').characterCounter();
});

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
