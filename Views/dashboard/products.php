<?php
	$title = 'AG Shop - Dashboard';
    $homeClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
    $productsClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
    $contacClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';

    $myPurchasesClass = 'text-base text-white font-normal rounded-lg flex items-center p-2 hover:bg-gray-900 group';
    $myProfileClass = 'text-base text-white font-normal rounded-lg flex items-center p-2 hover:bg-gray-900 group';
    $myProductsClass = 'text-base text-white font-normal rounded-lg flex items-center p-2 bg-gray-900 group';
	require 'Views/layouts/dash_header.php';
?>
<section class="mt-10 mx-40 min-h-screen">
	<?php foreach($products as $product) { ?>
	<div class="rounded-lg px-3 py-3 mb-5 bg-gray-800">
		<div class="shadow lg:flex bg-gray-900 px-3 rounded-xl">
	  <div class="rounded-lg lg:w-2/12 py-4 block h-full shadow-inner">
		<a href="<?= URL::get('Product', 'show', array('id' => $product['id'])) ?>">
			<img class="object-cover object-center h-full" src="<?= URL::file('Products/product.png') ?>" alt="Producto">
		</a>
	  </div>
	  <div class="w-full lg:w-11/12 xl:w-full px-1 py-5 lg:px-2 lg:py-2 tracking-wide">
		<div class="flex flex-row lg:justify-start justify-center">
		  <div class="text-gray-300 font-medium text-sm text-center lg:text-left px-2">
			$<?= $product['price'] ?>
		  </div>
		  <div class="text-gray-300 font-medium text-sm text-center lg:text-left px-2">
		  	Vendedor: <?= $product['username']?>
		  </div>
		</div>
		<div class="font-semibold text-white text-xl text-center lg:text-left px-2">
			<a href="<?= URL::get('Product', 'show', array('id' => $product['id'])) ?>">
				<?= $product['name'] ?>
			</a>
		</div>

		<div class="text-gray-200 font-medium text-sm pt-1 text-center lg:text-left px-2">
			<?= $product['description'] ?>
		</div>
	  </div>
	  <div class="flex flex-row items-center w-full lg:w-1/3 lg:justify-end justify-center px-2 py-4 lg:px-0">
	  <button class="py-2 px-10 bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-800 text-xs font-bold rounded" onclick='loggedIn(<?= $product['id'] ?>, <?= Auth::loggedIn() ?>)'>Agregar al carrito</button>
	  </div>
		</div>
	</div>
	<?php } ?>
</section>
<?php
    require 'Views/layouts/dash_footer.php';
?>
