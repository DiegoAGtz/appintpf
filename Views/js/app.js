function scrollWin() {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: 'smooth'
  });
}

function hideScroll() {
  let buttonUp = document.getElementById("button-up");
  let scroll = document.documentElement.scrollTop;
  if(scroll > 300) {
    buttonUp.classList.remove("hidden");
  } else {
    buttonUp.classList.add("hidden");
  }
}

///
window.onscroll = function() {hideScroll()}
