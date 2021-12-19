<?php
	$title = 'AG Shop - Products';
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

<?php if($products != null) { ?>
<section class="mt-10 mx-40">
	<?php foreach($products as $product) { ?>
	<div class="rounded-lg px-3 py-3 mb-5 bg-gray-800">
		<div class="shadow lg:flex bg-gray-900 px-3 rounded-xl">
	  <div class="rounded-lg lg:w-2/12 py-4 block h-full shadow-inner">
		<a href="<?= URL::get('Product', 'show', array('id' => $product['id'])) ?>">
			<img class="object-cover rounded-xl object-center h-full" src="<?= URL::file('Products/'.$product['image']) ?>" alt="Producto">
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
			<?= Str::truncate($product['description'], 256) ?>
		</div>
	  </div>
	  <div class="flex flex-row items-center w-full lg:w-1/3 lg:justify-end justify-center px-2 py-4 lg:px-0">
	  <button class="py-2 px-10 bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-800 text-xs font-bold rounded" onclick='loggedIn(<?= $product['id'] ?>, <?= Auth::loggedIn() ?>)'>Agregar al carrito</button>
	  </div>
		</div>
	</div>
	<?php } ?>
</section>

<?php } else { ?>
	<div class="text-center min-h-screen mx-16 mt-16" id="emptyDiv">
    <h1 class="mt-6 text-xl font-bold text-white md:text-3xl">Parece que aún no existen productos</h1>
    <p class="text-xl font-medium tracking-wider text-gray-300">¿Qué te parece si agregas el primero?</p>
	<div class="my-7">
		<a href="<?= URL::get('Dashboard', 'addProduct') ?>" class="py-2 px-10 bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-800 text-xs font-bold rounded">
			Añadir producto
		</a>
	</div>
</div>
<?php } ?>

<script src="Views/js/car.js" defer></script>
<script src="Views/js/products.js" defer></script>

<?php
	require 'Views/layouts/footer.php';
?>
