<?php
	$title = 'AG Shop - Products';
	require 'Views/layouts/header.php';
?>

<section class="my-10 mx-24">
	<div class="grid grid-cols-3 gap-14 place-items-center">
	<?php foreach($products as $product) { ?>
		<div class="min-w-full">
		  <div class="flex max-w-sm min-w-min bg-gray-800 shadow-lg rounded-lg overflow-hidden">
		  	<a class="w-1/3" href="<?= URL::get('Product', 'show', array('id' => $product['id'])) ?>">
				<img class="object-cover object-center w-full h-full p-2" src="<?= URL::file('Products/product.png') ?>" alt="Producto">
			</a>
			<div class="w-2/3 p-4">
				<a href="<?= URL::get('Product', 'show', array('id' => $product['id'])) ?>">
					<h1 class="text-white font-bold text-2xl"><?= $product['name'] ?></h1>
				</a>
				<p class="mt-2 text-gray-200 text-sm"><?= STR::truncate($product['description'], 30) ?></p>
			  <div class="flex item-center mt-2">
			  	<h1 class="text-gray-200 font-bold text-base">$<?= $product['price'] ?></h1>
			  </div>
			  <div class="flex item-center justify-between mt-3">
				<button class="px-3 py-2 w-full bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-800 text-xs font-bold rounded">Agregar al carrito</button>
			  </div>
			</div>
		  </div>
		</div>

	<?php } ?>
	</div>
</section>

<?php
	require 'Views/layouts/footer.php';
?>
