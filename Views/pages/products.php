<?php
	$title = 'AG Shop - Products';
    $homeClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
    $productsClass = 'bg-gray-900 md:bg-transparent block pl-3 pr-4 py-2 md:text-white md:p-0 rounded text-white';
    $contacClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
	require 'Views/layouts/header.php';
?>

<section class="mt-10 mx-40">
	<?php foreach($products as $product) { ?>

	<div class="lg:flex shadow rounded-lg px-5 mb-5 bg-gray-800">
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
			Organiser : IHC
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
		<button class="py-2 px-10 bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-800 text-xs font-bold rounded">Agregar al carrito</button>
	  </div>
	</div>

	<?php } ?>
</section>

<?php
	require 'Views/layouts/footer.php';
?>
