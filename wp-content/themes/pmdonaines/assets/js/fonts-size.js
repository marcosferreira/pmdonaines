function changeFontSize(delta) {
  var tags = document.querySelectorAll("a,p,blockquote");
  for (i = 0; i < tags.length; i++) {
    if (tags[i].style.fontSize) {
      var s = parseInt(tags[i].style.fontSize.replace("px", ""));
    } else {
      var s = 12;
    }
    if (s != 150) {
      s += delta;
    }
    tags[i].style.fontSize = s + "px";
  }
}

function increaseFontSize() {
  changeFontSize(1);
}

function decreaseFontSize() {
  changeFontSize(-1);
}
