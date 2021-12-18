const $tableDiv = document.getElementById("tableDiv")
const $emptyDiv = document.getElementById("emptyDiv")
const $cuerpoTabla = document.querySelector("#cuerpoTabla")
const $celdaTotal = document.querySelector("#celdaTotal")
const $btnTerminarCompra = document.querySelector("#btnTerminarCompra")
const c = new Car()

$btnTerminarCompra.onclick = () => {
  const productos = c.get()
  const respuestaRaw = await fetch('index.php?controller=Product&action=apiget', {
    headers: {
      'Accept': 'application/json'
    },
    method: 'POST',
    body: JSON.stringify(productos)
  });
  let res = await respuestaRaw.json();
  console.log(res)
  console.log(JSON.stringify(productos))
}

const refrescarCarrito = () => {
  const productos = c.get()
  // Limpiamos la tabla
  $cuerpoTabla.innerHTML = ""
  showPing()
  // Ahora ya tenemos a los productos. Los recorremos
  let total = 0

  if(productos.length > 0 && productos != null) {
    $tableDiv.classList.remove('hidden')
    $emptyDiv.classList.add('hidden')
    for (const producto of productos) {
      total += parseFloat(producto.price) * parseFloat(producto.cantidad)

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
      const $celdaPlus = document.createElement("td")
      $celdaPlus.classList.add("px-6", "py-4", "whitespace-nowrap", "text-right", "text-sm", "font-medium")

      const $plusButton = document.createElement("button")
      $plusButton.classList.add("text-white", "focus:ring-4", "font-medium", "rounded-full", "text-sm", "text-center", "inline-flex", "items-center", "mr-3", "bg-blue-600", "hover:bg-blue-700", "focus:ring-blue-800", "px-2", "py-1")
      $plusButton.innerHTML = "+"
      $plusButton.onclick = async () => {
        c.plus(idProducto)
        refrescarCarrito()
      }
      
      const $minusButton = document.createElement("td")
      $minusButton.classList.add("text-white", "focus:ring-4", "font-bold", "rounded-full", "text-sm", "text-center", "inline-flex", "items-center", "mr-3", "bg-red-600", "hover:bg-red-700", "focus:ring-red-800", "px-3", "py-1")
      $minusButton.innerHTML = "-"
      $minusButton.onclick = async () => {
        c.minus(idProducto)
        refrescarCarrito()
      }

      $celdaPlus.appendChild($plusButton)
      $celdaPlus.appendChild($minusButton)
      $fila.appendChild($celdaPlus)

      // const idProducto = producto.id
      const $celdaEliminar = document.createElement("td")
      $celdaEliminar.classList.add("px-6", "py-4", "whitespace-nowrap", "text-right", "text-sm", "font-medium")

      const $botonEliminar = document.createElement("button")
      $botonEliminar.classList.add("py-2", "px-4", "bg-indigo-600", "text-white", "hover:bg-indigo-700", "focus:ring-indigo-800", "text-xs", "font-bold", "rounded")
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
  } else {
    $tableDiv.classList.add('hidden')
    $emptyDiv.classList.remove('hidden')
  }
}

refrescarCarrito()
