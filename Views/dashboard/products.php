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

<?php if($products != null) { ?>

<section class="my-7 mx-40 min-h-screen">
	<div class="flex flex-row-reverse mb-7">
		<a href="<?= URL::get('Dashboard', 'addProduct') ?>" class="py-2 px-10 bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-800 text-xs font-bold rounded">
			Añadir producto
		</a>
	</div>
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
	  	<a href="<?= URL::get('Dashboard', 'update', array('id' => $product['id'])) ?>" class="py-2 px-3 mr-3 bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-800 text-xs font-bold rounded">Modificar</a>
		<form action="<?= URL::get('Product', 'destroy') ?>" method="POST">
			<input type="hidden" name="id" value="<?= $product['id'] ?>">
	  		<button type="submit" class="py-2 px-3 bg-red-600 text-white hover:bg-red-700 focus:ring-red-800 text-xs font-bold rounded">Eliminar</button>
		</form>
	  </div>
		</div>
	</div>
	<?php } ?>
</section>

<?php } else { ?>
<div class="text-center min-h-screen mx-16 mt-16" id="emptyDiv">
    <h1 class="mt-6 text-xl font-bold text-white md:text-3xl">Parece que no tienes productos</h1>
    <p class="text-xl font-medium tracking-wider text-gray-300">¿Qué te parece si agregamos uno?</p>
	<div class="my-7">
		<a href="<?= URL::get('Dashboard', 'addProduct') ?>" class="py-2 px-10 bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-800 text-xs font-bold rounded">
			Añadir producto
		</a>
	</div>
</div>
<?php } ?>

<?php
    require 'Views/layouts/dash_footer.php';
?>
