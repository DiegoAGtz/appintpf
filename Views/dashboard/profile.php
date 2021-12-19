<?php
	$title = 'AG Shop - Dashboard';
    $homeClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
    $productsClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
    $contacClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';

    $myPurchasesClass = 'text-base text-white font-normal rounded-lg flex items-center p-2 hover:bg-gray-900 group';
    $myProfileClass = 'text-base text-white font-normal rounded-lg flex items-center p-2 bg-gray-900 group';
    $myProductsClass = 'text-base text-white font-normal rounded-lg flex items-center p-2 hover:bg-gray-900 group';
    require 'Views/layouts/dash_header.php';
?>

<div class="min-h-screen">
    <div class="rounded-lg px-5 py-5 my-5 mx-10 bg-gray-800">
        <form class="w-full grid grid-cols-6 gap-4 shadow-lg bg-gray-900 rounded-xl p-5" action="<?= URL::get("User", "update") ?>" method="POST" enctype="multipart/form-data">
            <div class="col-span-2">
              <div class="container">
                <div class="max-w-md w-full px-6 py-3">
                  <div class="flex flex-col ">
                    <div class="">
                      <div class="relative h-62 w-full mb-3">
                        <img src="<?= URL::file('Avatars/'.Auth::info()['avatar']) ?>" id='avatarPreview' alt="Just a flower" class="w-full h-60 object-cover rounded-2xl">
                      </div>
                      <div class="flex-auto justify-evenly">
                        <div class="flex space-x-2 text-sm font-medium justify-start">
                          <label class="cursor-pointer flex mt-2 items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-indigo-700 hover:bg-indigo-800 rounded-2xl py-2 w-full transition duration-150 ease-in">
                            <span class="mr-2 uppercase">Modificar Foto</span>
                            <span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path>
                                  <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                                </svg>
                            </span>
                            <input type="file" id="avatar" name="avatar" class="hidden">
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-4">
                <div class="flex flex-col my-6">
                    <label for="name" class="mb-1 text-xs tracking-wide text-gray-300">Nombre:</label>
                    <div class="relative">
                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-800">
                            <svg class="w-6 h-6 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input required id="name" type="text" name="name" value="<?= Auth::info()['name'] ?>" class=" text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-gray-800" placeholder="Ingresa tu nombre"/>
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <label for="email" class="mb-1 text-xs tracking-wide text-gray-300">Correo electrónico:</label>
                    <div class="relative">
                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </div>
                        <input required id="email" type="email" name="email" value="<?= Auth::info()['email'] ?>" class="text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-gray-800" placeholder="Ingresa tu email"/>
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <label for="password" class="mb-1 text-xs tracking-wide text-gray-300 ">Contraseña:</label>
                        <div class="relative">
                            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                        <input id="password" type="password" name="password" class=" text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-gray-800" placeholder="Nueva contraseña"/>
                    </div>
                </div>
                <div class="flex w-full hidden" id="submitDiv">
                  <a href="<?= URL::get('Dashboard', 'profile') ?>" class="flex mt-2 mr-2 items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-red-700 hover:bg-red-800 rounded-2xl py-2 w-full transition duration-150 ease-in">
                        <span class="mr-2 uppercase">Cancelar</span>
                        <span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                            </svg>
                        </span>
                    </a>
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
        </form>
    </div>
</div>

<script src="Views/js/dashboard.js" defer></script>

<?php
    require 'Views/layouts/dash_footer.php';
?>
