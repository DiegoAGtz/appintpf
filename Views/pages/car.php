<?php
	$title = 'AG Shop - Car';
    $homeClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
    $productsClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
    $contacClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
	require 'Views/layouts/header.php';
?>
<div class="flex w-full fixed justify-center hidden" id="alertDiv">
	<div class="flex w-9/12 justify-self-center mt-5 bg-blue-100 pr-40 rounded-lg p-4 mb-4 text-sm text-blue-700 dark:bg-blue-200 dark:text-blue-800" role="alert">
	  <svg class="w-5 h-5 inline flex-shrink-0 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
	  <div>
	    <span class="font-medium" id="alertContent"></span>
	  </div>
	</div>
</div>


<div class="flex flex-col mx-16 my-5 hidden" id="tableDiv">
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
        <button class="py-2 px-10 bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-800 text-xs font-bold rounded" id="btnTerminarCompra" onclick="buy(<?= Auth::info()['id'] ?>)">
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
