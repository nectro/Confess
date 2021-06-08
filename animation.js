function copyText() {
  var l = document.getElementById("link");

  l.select();
  l.setSelectionRange(0, 99999);

  document.execCommand("copy");
  alert("Copied the text: " + l.value);
}

function menuAppear() {
  var area = document.getElementById("area-for-menu");
  var container = document.getElementById("menu-background");

  area.style = "width:100%";
  area.style.display = "block";

  container.style.opacity = "1";
}

function menuRetract() {
  var area = document.getElementById("area-for-menu");
  var container = document.getElementById("menu-background");

  area.style = "width:0%; transition-delay:0.4s;";

  container.style.opacity = "0";
}

function boxAppear(n) {
  //for the menu to retract before the appearence of the new background
  var area = document.getElementById("area-for-menu");
  var container = document.getElementById("menu-background");
  var areaInfo = document.getElementById("area-for-info");
  var infoContainer = document.getElementById("info-background");

  area.style = "width:0%; transition-delay:0.2s;";
  areaInfo.style = "width:100%;";

  container.style = "opacity:0;transition-duration:0.2s";
  infoContainer.style = "opacity:1;";

  var info;

  switch (n) {
    case 1:
      info = document.getElementById("info1");
      info.style = "display:block;";
      break;
    case 2:
      info = document.getElementById("info2");
      info.style = "display:block;";
      break;
    case 3:
      info = document.getElementById("info3");
      info.style = "display:block;";
      break;
  }
}

function infoRetract() {
  var area = document.getElementById("area-for-info");
  var container = document.getElementById("info-background");

  area.style = "width:0%; transition-delay:0.4s;";

  container.style.opacity = "0";

  var info = document.getElementById("info1");
  var info1 = document.getElementById("info2");
  var info2 = document.getElementById("info3");

  info.style = "display:none;";
  info1.style = "display:none;";
  info2.style = "display:none;";
}
