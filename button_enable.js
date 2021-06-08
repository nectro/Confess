var n = document.getElementById("inp_name");
var e = document.getElementById("inp_email");
var p = document.getElementById("inp_pass");
var b = document.getElementById("form_btn");

window.addEventListener("keyup", () => {
  if (n.valueof || e.valueof || p.valueof) {
    b.disabled = false;
  } else {
    b.disabled = true;
  }
});
