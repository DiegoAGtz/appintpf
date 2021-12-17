<?php
   require_once 'Views/layouts/header.php';
?>
<aside id="sidebar" class="bg-gray-800 fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75" aria-label="Sidebar">
   <div class="relative flex-1 flex flex-col min-h-0 bg-indigo-700 pt-0">
      <div class="flex-1 flex flex-col py-1 overflow-y-auto">
         <div class="flex-1 px-3 bg-gray-800 divide-y space-y-1">
            <ul class="space-y-2 pb-2 mt-2">
               <li>
                  <a href="<?= URL::get('Dashboard', 'index') ?>" class="<?= $myPurchasesClass ?>">
                     <svg class="w-6 h-6 text-gray-300 group-hover:text-white transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                     </svg>
                     <span class="ml-3">Mis Compras</span>
                  </a>
               </li>
               <li>
                  <a href="<?= URL::get('Dashboard', 'profile') ?>" class="<?= $myProfileClass ?>">
                     <svg class="w-6 h-6 text-gray-300 flex-shrink-0 group-hover:text-white transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                     </svg>
                     <span class="ml-3 flex-1 whitespace-nowrap">Mi Perfil</span>
                  </a>
               </li>
               <li>
                  <a href="<?= URL::get('Dashboard', 'products') ?>" class="<?= $myProductsClass ?>">
                     <svg class="w-6 h-6 text-gray-200 flex-shrink-0 group-hover:text-white transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                     </svg>
                     <span class="ml-3 flex-1 whitespace-nowrap">Mis Productos</span>
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</aside>
<div id="main-content" class="bg-trueGray-900 lg:ml-64">
