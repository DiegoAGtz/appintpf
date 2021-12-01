<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
<body>
<nav class="border-gray-200 px-2 sm:px-4 py-3 bg-gray-800 fixed z-30 w-full border-b">
  <div class="container mx-auto flex flex-wrap items-center justify-between">
  <a href="#" class="flex">


<svg class="w-10 h-10 mr-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>

      <span class="self-center text-lg font-semibold whitespace-nowrap text-white">AG SHOP</span>
  </a>
  <div class="flex items-center md:order-2">

        <a class="flex items-center text-gray-200 hover:text-white mr-5" href="<?= URL::get('Page', 'car')?>">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          <span class="flex absolute -mt-5 ml-4">
            <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
            </span>
          </span>
        </a>


<?php if(1){ ?>
<!--
      <button type="button" class="mr-3 md:mr-0 bg-gray-800 flex text-sm rounded-full focus:ring-4 focus:ring-gray-600" id="dropdownButton" data-dropdown-toggle="dropdown">
        <img class="h-8 w-8 rounded-full" src="<?= URL::file('Avatars/avatar.jpg') ?>" alt="user photo">
      </button>
-->
<button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="border-0 pl-3 pr-4 py-2 md:p-0 flex items-center justify-between w-full md:w-auto text-gray-200 hover:text-white focus:text-white border-gray-700 hover:bg-transparent md-text-base font-medium">
Mi perfil
<svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
</button>
      <div class="hidden text-base z-50 list-none divide-y rounded shadow my-4 bg-gray-800 divide-gray-600" id="dropdownNavbar">
        <div class="px-4 py-3">
          <div class="grid place-items-center mb-3">
            <img class="h-24 w-24 rounded-full" src="<?= URL::file('Avatars/avatar.jpg') ?>" alt="user photo">
          </div>
          <span class="block text-sm text-white">DiegoAGtz</span>
          <span class="block text-sm font-medium truncate text-gray-400">da@ga.com</span>
        </div>
        <ul class="py-1" aria-labelledby="dropdownNavbar">
        <li>
          <a href="<?= URL::get('User', 'index') ?>" class="text-sm block px-4 py-2 hover:bg-gray-600 text-gray-200 hover:text-white">Panel de control</a>
        </li>
        <li>
        <li>
          <a href="#" class="text-sm block px-4 py-2 hover:bg-gray-600 text-gray-200 hover:text-white">Cerrar sesión</a>
        </li>
        </ul>
      </div>
<?php } else { ?>


<a href="<?= URL::get('Auth', 'login')?>" class="border-b md:border-0 pl-3 pr-4 py-2 md:p-0 font-medium flex items-center justify-between w-full md:w-auto text-gray-200 hover:text-white focus:text-white border-gray-700 hover:bg-gray-700 md:hover:bg-transparent md-text-base md:font-medium">Login</a>

<?php } ?>

      <button data-collapse-toggle="mobile-menu-2" type="button" class="md:hidden ml-1 focus:outline-none focus:ring-2 rounded-lg text-sm p-2 inline-flex items-center text-gray-400 hover:bg-gray-700 focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="hidden md:flex justify-between items-center w-full md:w-auto md:order-1" id="mobile-menu-2">
    <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-base md:font-medium">
      <li>
        <a href="<?= URL::get('Page', 'index') ?>" class="bg-blue-700 md:bg-transparent block pl-3 pr-4 py-2 md:text-white md:p-0 rounded text-white" aria-current="page">Inicio</a>
      </li>
      <li>
        <a href="<?= URL::get('Page', 'products') ?>" class="border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700">Productos</a>
      </li>
      <li>
        <a href="<?= URL::get('Page', 'contact') ?>" class="border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700">Contacto</a>
      </li>
      <li>
    </ul>
  </div>
  </div>
</nav>

   <div class="flex overflow-hidden bg-white pt-16">
