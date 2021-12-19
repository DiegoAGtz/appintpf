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

<?php if(!isset($product)) { ?>

<div class="min-h-screen">
    <div class="rounded-lg px-5 py-5 my-5 mx-10 bg-gray-800">
        <form class="w-full grid grid-cols-6 gap-4 shadow-lg bg-gray-900 rounded-xl p-5" action="<?= URL::get("Product", "store") ?>" method="POST" enctype="multipart/form-data">
            <div class="col-span-2">
              <div class="container">
                <div class="max-w-md w-full px-6 py-3">
                  <div class="flex flex-col ">
                    <div class="">
                      <div class="relative h-62 w-full mb-3">
                        <img src="<?= URL::file('Products/product.png') ?>" id='imagePreview' alt="Just a flower" class="w-full h-72 object-cover rounded-2xl">
                      </div>
                      <div class="flex-auto justify-evenly">
                        <div class="flex space-x-2 text-sm font-medium justify-start">
                          <label class="cursor-pointer flex mt-2 items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-indigo-700 hover:bg-indigo-800 rounded-2xl py-2 w-full transition duration-150 ease-in">
                            <span class="mr-2 uppercase">Añadir Imagen</span>
                            <span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path>
                                  <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                                </svg>
                            </span>
                            <input type="file" id="image" name="image" class="hidden">
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-4">
                <div class="flex flex-col mb-6">
                    <label for="name" class="mb-1 text-xs tracking-wide text-gray-300">Nombre:</label>
                    <div class="relative">
                        <input required id="name" type="text" name="name" class=" text-sm placeholder-gray-500 px-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-gray-800" placeholder="Nombre del producto"/>
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <label for="email" class="mb-1 text-xs tracking-wide text-gray-300">Descripción:</label>
                    <div class="relative">
                        <textarea required id="description" name="description" rows="4" class="text-sm placeholder-gray-500 px-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-gray-800" placeholder="Descripción del producto"></textarea>
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <label for="password" class="mb-1 text-xs tracking-wide text-gray-300 ">Costo:</label>
                    <div class="relative">
                      <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                          <svg class="w-6 h-6 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                          </svg>
                      </div>
                      <input id="price" value="0.00" required type="number" name="price" class=" text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-gray-800" placeholder="0.00"/>
                  </div>
                </div>
                <div class="flex w-full" id="submitDiv">
                    <button type="submit" class="flex mt-2 ml-2 items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-indigo-700 hover:bg-indigo-800 rounded-2xl py-2 w-full transition duration-150 ease-in">
                        <span class="mr-2 uppercase">Guardar</span>
                        <span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php } else { ?>

<div class="min-h-screen">
    <div class="rounded-lg px-5 py-5 my-5 mx-10 bg-gray-800">
        <form class="w-full grid grid-cols-6 gap-4 shadow-lg bg-gray-900 rounded-xl p-5" action="<?= URL::get("Product", "update") ?>" method="POST" enctype="multipart/form-data">
            <div class="col-span-2">
              <div class="container">
                <div class="max-w-md w-full px-6 py-3">
                  <div class="flex flex-col ">
                    <div class="">
                      <div class="relative h-62 w-full mb-3">
                        <img src="<?= URL::file('Products/'.$product['image']) ?>" id='imagePreview' alt="Just a flower" class="w-full h-72 object-cover rounded-2xl">
                      </div>
                      <div class="flex-auto justify-evenly">
                        <div class="flex space-x-2 text-sm font-medium justify-start">
                          <label class="cursor-pointer flex mt-2 items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-indigo-700 hover:bg-indigo-800 rounded-2xl py-2 w-full transition duration-150 ease-in">
                            <span class="mr-2 uppercase">Modificar Imagen</span>
                            <span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path>
                                  <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                                </svg>
                            </span>
                            <input type="file" id="image" name="image" class="hidden">
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-4">
                <div class="flex flex-col mb-6">
                    <label for="name" class="mb-1 text-xs tracking-wide text-gray-300">Nombre:</label>
                    <div class="relative">
                      <input required id="name" type="text" name="name" value="<?= $product['name'] ?>" class=" text-sm placeholder-gray-500 px-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-gray-800" placeholder="Nombre del producto"/>
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <label for="email" class="mb-1 text-xs tracking-wide text-gray-300">Descripción:</label>
                    <div class="relative">
                      <textarea required id="description" name="description" rows="4" class="text-sm placeholder-gray-500 px-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-gray-800" placeholder="Descripción del producto"><?= $product['description'] ?></textarea>
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <label for="password" class="mb-1 text-xs tracking-wide text-gray-300 ">Costo:</label>
                    <div class="relative">
                      <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                          <svg class="w-6 h-6 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                          </svg>
                      </div>
                      <input id="price" value="<?= $product['price'] ?>" required type="number" name="price" class=" text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-gray-800" placeholder="0.00"/>
                  </div>
                </div>
                <div class="flex w-full">
                  <a id="cancelButton" href="<?= URL::get('Dashboard', 'products') ?>" class="flex mt-2 mr-2 items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-red-700 hover:bg-red-800 rounded-2xl py-2 w-full transition duration-150 ease-in">
                        <span class="mr-2 uppercase">Cancelar</span>
                        <span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                            </svg>
                        </span>
                    </a>
                    <input type="hidden" name="id" id="id" value="<?= $product['id'] ?>">
                    <div class="flex w-full hidden" id="submitDiv">
                      <button type="submit" class="flex mt-2 ml-2 items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-indigo-700 hover:bg-indigo-800 rounded-2xl py-2 w-full transition duration-150 ease-in">
                          <span class="mr-2 uppercase">Modificar</span>
                          <span>
                              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                              </svg>
                          </span>
                      </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php } ?>

<script src="Views/js/addproduct.js" defer></script>

<?php
    require 'Views/layouts/dash_footer.php';
?>
