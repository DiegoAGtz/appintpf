const $cuerpoTabla = document.querySelector("#cuerpoTabla")
const $celdaTotal = document.querySelector("#celdaTotal")
const $btnTerminarCompra = document.querySelector("#btnTerminarCompra")
const c = new Car()

$btnTerminarCompra.onclick = () => {
  // Aquí haz lo que gustes con el carrito
  const productos = c.get()
  console.log(productos)
}

const refrescarCarrito = () => {
  const productos = c.get()
  // Limpiamos la tabla
  $cuerpoTabla.innerHTML = ""
  showPing()
  // Ahora ya tenemos a los productos. Los recorremos
  let total = 0
  for (const producto of productos) {
    total += parseFloat(producto.price)

    const $fila = document.createElement("tr")
    $fila.classList.add("border-b", "bg-gray-800", "border-gray-700")

    const $celdaNombre = document.createElement("td")
    $celdaNombre.classList.add("text-xs", "font-medium", "px-6", "py-3", "text-left", "uppercase", "tracking-wider", "text-white")
    $celdaNombre.innerText = producto.name
    $fila.appendChild($celdaNombre)

    const $celdaDescripcion = document.createElement("td")
    $celdaDescripcion.classList.add("text-xs", "font-medium", "px-6", "py-3", "text-left", "uppercase", "tracking-wider", "text-gray-400")
    if(producto.description.length > 87)
      $celdaDescripcion.innerText = producto.description.substring(0, 87) + '...'
    else
      $celdaDescripcion.innerText = producto.description
    $fila.appendChild($celdaDescripcion)

    const $celdaCantidad = document.createElement("td")
    $celdaCantidad.classList.add("text-xs", "font-medium", "px-6", "py-3", "text-left", "uppercase", "tracking-wider", "text-white")
    $celdaCantidad.innerText = producto.cantidad
    $fila.appendChild($celdaCantidad)

    const $celdaPrecio = document.createElement("td")
    $celdaPrecio.classList.add("text-xs", "font-medium", "px-6", "py-3", "text-left", "uppercase", "tracking-wider", "text-white")
    $celdaPrecio.innerText = '$' + (producto.price*producto.cantidad)
    $fila.appendChild($celdaPrecio)

    const idProducto = producto.id
    const $celdaEliminar = document.createElement("td")
    $celdaEliminar.classList.add("px-6", "py-4", "whitespace-nowrap", "text-right", "text-sm", "font-medium")

    const $botonEliminar = document.createElement("button")
    $botonEliminar.classList.add("text-indigo-700", "hover:underline", "font-bold")
    $botonEliminar.innerHTML = "Eliminar"
    $botonEliminar.onclick = async () => {
      c.remove(idProducto)
      refrescarCarrito()
    }

    $celdaEliminar.appendChild($botonEliminar)
    $fila.appendChild($celdaEliminar)
    $cuerpoTabla.appendChild($fila)
  }
  $celdaTotal.textContent = '$' + total.toString()
}

refrescarCarrito()