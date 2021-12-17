<?php
	$title = 'AG Shop - Car';
    $homeClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
    $productsClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
    $contacClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
	require 'Views/layouts/header.php';
?>

<div class="flex flex-col mx-16 mt-5 hidden" id="tableDiv">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg shadow-md">
                <table class="min-w-full">
                    <thead class="bg-gray-700">
                        <tr>
                            <th scope="col" class="text-xs px-6 py-3 text-left uppercase tracking-wider text-gray-200">
                                Nombre
                            </th>
                            <th scope="col" class="text-xs px-6 py-3 text-left uppercase tracking-wider text-gray-200">
                                Descripción
                            </th>
                            <th scope="col" class="text-xs px-6 py-3 text-left uppercase tracking-wider text-gray-200">
                                Cantidad
                            </th>
                            <th scope="col" class="text-xs px-6 py-3 text-left uppercase tracking-wider text-gray-200">
                                Costo
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                            </th>
                        </tr>
                    </thead>
                    <tbody id="cuerpoTabla">
                    </tbody>
                    <tfoot class="bg-gray-700">
                        <tr>
                            <td class="text-xs font-bold px-6 py-3 text-left uppercase tracking-wider text-gray-200">Total</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-xs font-bold px-6 py-3 text-left uppercase tracking-wider text-gray-200" id="celdaTotal"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="flex flex-row-reverse mt-2">
        <button class="py-2 px-10 bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-800 text-xs font-bold rounded" id="btnTerminarCompra">
            Terminar Compra
        </button>
    </div>
</div>
<div class="text-center mx-16 mt-10 hidden" id="emptyDiv">
    <h1 class="mt-6 text-xl font-bold text-white md:text-3xl">Tu carrito está vacío</h1>
    <p class="text-xl font-medium tracking-wider text-gray-300">¿No sabes que comprar? ¡Miles de productos te esperan!</p>
</div>

<script src="Views/js/car.js"></script>
<script src="Views/js/shoppingcar.js"></script>

<?php
	require 'Views/layouts/footer.php';
?>
