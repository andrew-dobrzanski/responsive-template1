$(document).ready(function() {
  // SPCHECK
  (function() {
    var e = document.getElementById("SPCHECK");
    e.parentNode.removeChild(e);
  })();

}); // close out script

function validateForm(e) {
  var i = new Array();
  i[0] = document.getElementById('fname').value;
  i[1] = document.getElementById('lname').value;
  i[2] = document.getElementById('email').value;

  if (i[0] !== "" && i[1] !== "" && i[2] !== "") {
    return true;
  } else {
	$('#confirmation').modal({
        show: 'true'
    }); 
    return false;
  }

}
