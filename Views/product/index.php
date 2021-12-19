<?php
	$title = 'AG Shop - Detalle del producto';
    $homeClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
    $productsClass = 'bg-gray-900 md:bg-transparent block pl-3 pr-4 py-2 md:text-white md:p-0 rounded text-white';
    $contacClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
	require 'Views/layouts/header.php';
?>
<div class="flex w-full fixed justify-center hidden" id="alertDiv">
	<div class="flex w-9/12 justify-self-center mt-5 bg-blue-100 pr-40 rounded-lg p-4 mb-4 text-sm text-blue-700 dark:bg-blue-200 dark:text-blue-800" role="alert">
	  <svg class="w-5 h-5 inline flex-shrink-0 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
	  <div>
	    <span class="font-medium">Se ha añadido 1 </span><span id="alertContent"></span> 
	  </div>
	</div>
</div>

<section class="text-gray-700 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap bg-gray-800 rounded-xl px-8 py-12">
    <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded-xl border border-gray-800" src="<?= URL::file('Products/'.$product['image']) ?>">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
	  	<h1 class="text-white text-3xl title-font font-medium mb-4"><?= $product['name'] ?></h1>
        <p class="leading-relaxed text-sm -mt-4 mb-2 text-gray-200">Ofrecido por: <?= $product['username'] ?></p>
        <p class="leading-relaxed text-gray-200"><?= $product['description'] ?></p>
        <div class="flex mt-4 items-center pb-5 border-b-2 border-gray-700 mb-4"></div>
        <div class="flex">
		  <span class="title-font font-medium text-2xl text-gray-100">$<?= $product['price'] ?></span>
          <?php if($product['state'] == 1) { ?>
          <div class="flex item-center font-medium text-2xl title-font px-6 justify-between">
            <button class="px-3 py-2 w-full bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-800 text-xs font-bold rounded" onclick='loggedIn(<?= $product['id'] ?>, <?= Auth::loggedIn() ?>)'>Agregar al carrito</button>
          </div>
          <?php } ?>
        </div>
        <?php if($product['state'] == 0) { ?>
        <div class="flex mt-4 items-center pb-5 mb-4">
          <p class="text-gray-200">Ups, parece ser que el vendedor ha dejado de vender este producto.</p>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<script src="Views/js/car.js" defer></script>
<script src="Views/js/products.js" defer></script>

<?php
	require 'Views/layouts/footer.php';
?>
