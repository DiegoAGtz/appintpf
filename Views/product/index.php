<?php
	$title = 'AG Shop - Products';
    $homeClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
    $productsClass = 'bg-gray-900 md:bg-transparent block pl-3 pr-4 py-2 md:text-white md:p-0 rounded text-white';
    $contacClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
	require 'Views/layouts/header.php';
?>
<section class="text-gray-700 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap bg-gray-800 rounded-xl px-8 py-12">
    <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded-xl border border-gray-800" src="<?= URL::file('Products/'.$product['image']) ?>">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
	  	<h1 class="text-white text-3xl title-font font-medium mb-4"><?= $product['name'] ?></h1>
        <p class="leading-relaxed text-gray-200"><?= $product['description'] ?></p>
        <div class="flex mt-4 items-center pb-5 border-b-2 border-gray-700 mb-4"></div>
        <div class="flex">
		  <span class="title-font font-medium text-2xl text-gray-100">$<?= $product['price'] ?></span>
          <div class="flex item-center font-medium text-2xl title-font px-6 justify-between">
            <button class="px-3 py-2 w-full bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-800 text-xs font-bold rounded">Agregar al carrito</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
	require 'Views/layouts/footer.php';
?>
