const addProduct = async (id) => {
    const respuestaRaw = await fetch(`index.php?controller=Product&action=apiget&id=${id}`);
    let producto = await respuestaRaw.json();
    const c = new Car();
    if (c.exists(producto.id)) {
        c.plus(producto.id);
    } else {
        c.add(producto);
    }

    const $alertDiv = document.getElementById("alertDiv")
    const $alertContent = document.getElementById("alertContent")
    $alertContent.innerText = ""
    $alertContent.innerText = producto.name
    $alertDiv.classList.remove("hidden")

    showPing()
    setTimeout(() => {$alertDiv.classList.add("hidden")}, 3000)
};
