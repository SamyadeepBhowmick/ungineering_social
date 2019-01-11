var status=document.getElementsById("status");
var submit=document.getElementsByClassName("submit")[0];

function validateForm() {
  var x = status.value;
  if (x == "") {
    alert("Please enter something");
    return false;
  }
  else
    return true;
}
