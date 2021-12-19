function readFile(input) {
    if (input.files && input.files[0]) {
        let reader = new FileReader()
        reader.onload = function (e) {
            const filePreview = document.getElementById('imagePreview')
            filePreview.src = e.target.result
        }
        reader.readAsDataURL(input.files[0])
    }
}

const fileUpload = document.getElementById('image')
fileUpload.onchange = function(e) {
    readFile(e.srcElement)
}

const btnCancel = document.getElementById('cancelButton')
if(btnCancel != null) {
    const nameField = document.getElementById('name')
    const descriptionField = document.getElementById('description')
    const priceField = document.getElementById('price')
    const imageField = document.getElementById('image')
    const submitDiv = document.getElementById('submitDiv')

    nameField.onchange = function() {
        submitDiv.classList.remove('hidden')
    }

    descriptionField.onchange = function() {
        submitDiv.classList.remove('hidden')
    }
    
    priceField.onchange = function() {
        submitDiv.classList.remove('hidden')
    }

    imageField.onchange = function(e) {
        submitDiv.classList.remove('hidden')
        readFile(e.srcElement)
    }
}
