window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 220 || document.documentElement.scrollTop > 220) {
    document.getElementById("Navbar").style.top = "300px";
  } else {
    document.getElementById("Navbar").style.top = "-300px";
  }
}