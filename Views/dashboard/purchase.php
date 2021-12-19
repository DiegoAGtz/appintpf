<?php
	$title = 'Dashboard - Detalle de Compra';
    $homeClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
    $productsClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
    $contacClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';

    $myPurchasesClass = 'text-base text-white font-normal rounded-lg flex items-center p-2 bg-gray-900 group';
    $myProfileClass = 'text-base text-white font-normal rounded-lg flex items-center p-2 hover:bg-gray-900 group';
    $myProductsClass = 'text-base text-white font-normal rounded-lg flex items-center p-2 hover:bg-gray-900 group';
	require 'Views/layouts/dash_header.php';
    $totalCost = 0;
?>

<main class="min-h-screen">
   <div class="pt-6 px-4">
      <div class="grid xl:gap-4 my-4">
         <div class="bg-gray-800 shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
            <div class="flex items-center justify-between mb-4">
               <h3 class="text-xl font-bold leading-none text-white">Fecha: <?= substr($products[0]['date'], 0, 10) ?></h3>
            </div>
            <div class="flow-root">
               <div class="flex flex-col">
                  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                     <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow-md sm:rounded-lg">
                           <table class="min-w-full">
                              <thead class="bg-gray-700">
                                 <tr>
                                    <th scope="col" class="px-6 py-3 text-xs tracking-wider text-left uppercase text-gray-200">
                                       Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs tracking-wider text-left uppercase text-gray-200">
                                       Cantidad
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs tracking-wider text-left uppercase text-gray-200">
                                       Precio
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs tracking-wider text-left uppercase text-gray-200">
                                       Costo total
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs tracking-wider text-left uppercase text-gray-200">
                                    </th>
                                 </tr>
                              </thead>
                           <tbody>
                           <?php foreach($products as $product) { $totalCost+=($product['price']*$product['amount']) ?>
                           <tr class="bg-gray-900 border-b border-gray-700">
                              <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-white">
                                 <?= $product['name'] ?>
                              </td>
                              <td class="px-6 py-4 text-sm whitespace-nowrap text-gray-300">
                                 <?= $product['amount'] ?>
                              </td>
                              <td class="px-6 py-4 text-sm whitespace-nowrap text-gray-300">
                                 $<?= $product['price'] ?>
                              </td>
                              <td class="px-6 py-4 text-sm whitespace-nowrap text-gray-300">
                                 $<?= $product['amount']*$product['price'] ?>
                              </td>
                              <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                 <a href="<?= URL::get('Product', 'show', array('id' => $product['id'])) ?>" class="py-2 px-4 bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-800 text-xs font-bold rounded">
                                    Ver
                                 </a>
                              </td>
                           </tr>
                           <?php } ?>
                           </tbody>
                           <tfoot class="bg-gray-700">
                               <tr>
                                   <td class="text-xs font-bold px-6 py-3 text-left uppercase tracking-wider text-gray-200">Total</td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td class="text-xs font-bold px-6 py-3 text-left uppercase tracking-wider text-gray-200">$<?= $totalCost ?></td>
                               </tr>
                           </tfoot>

                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>



<?php
    require 'Views/layouts/dash_footer.php';
?>
