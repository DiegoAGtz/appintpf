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
  if (scroll > 300)
    buttonUp.classList.remove("hidden")
  else
    buttonUp.classList.add("hidden")
}

function showPing() {
  const pingCar = document.getElementById("pingCar")
  if(localStorage.getItem('products') == "[]" || localStorage.getItem('products') == null)
    pingCar.classList.add('hidden')
  else
    pingCar.classList.remove('hidden')
}

function loggedIn(id, loggedIn) {
  if (loggedIn)
    addProduct(id)
  else
    window.location.href = "index.php?controller=Auth&action=login"
}

function logout(uri, loggedIn) {
  if (loggedIn){
    localStorage.removeItem('products')
    window.location.href = uri
  }
}

window.onload = function () {
  hideScroll()
  showPing()
}

window.onscroll = function () {
  hideScroll()
}
