function readFile(input) {
    if (input.files && input.files[0]) {
        let reader = new FileReader()
        reader.onload = function (e) {
            let filePreview = document.getElementById('avatarPreview')
            filePreview.src = e.target.result
        }
        reader.readAsDataURL(input.files[0])
    }
}

let fileUpload = document.getElementById('avatar')
let nameField = document.getElementById('name')
let emailField = document.getElementById('email')
let passwordField = document.getElementById('password')
let submitDiv = document.getElementById('submitDiv')
fileUpload.onchange = function(e) {
    submitDiv.classList.remove('hidden')   
    readFile(e.srcElement)
}

nameField.onchange = function() {
    submitDiv.classList.remove('hidden')   
}

emailField.onchange = function() {
    submitDiv.classList.remove('hidden')   
}

passwordField.onchange = function() {
    submitDiv.classList.remove('hidden')   
}
