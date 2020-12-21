function myFunction() {
  var x = document.getElementById("header_links");
  if (x.className === "header_links") {
    x.className += " responsive";
  } else {
    x.className = "header_links";
  }
}
