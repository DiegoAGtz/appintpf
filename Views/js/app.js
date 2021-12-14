function scrollWin() {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth",
  })
}

function hideScroll() {
  let buttonUp = document.getElementById("button-up")
  let scroll = document.documentElement.scrollTop
  if (scroll > 300) {
    buttonUp.classList.remove("hidden")
  } else {
    buttonUp.classList.add("hidden")
  }
}

function showPing() {
  const pingCar = document.getElementById("pingCar")
  if(localStorage.getItem('products') == "[]") {
    pingCar.classList.add('hidden')
  } else {
    pingCar.classList.remove('hidden')
  }
}

window.onload = function () {
  hideScroll()
  showPing()
}

window.onscroll = function () {
  hideScroll()
}
