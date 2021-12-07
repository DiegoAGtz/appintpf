<?php
	$title = 'AG Shop';
    $homeClass = 'bg-gray-900 md:bg-transparent block pl-3 pr-4 py-2 md:text-white md:p-0 rounded text-white';
    $productsClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
    $contacClass = 'border-b md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700';
	require 'Views/layouts/header.php';
?>
<div>
    <section class="bg-gray-800 flex items-center justify-center" style="height: 500px;">
        <div class="text-center">
            <p class="text-xl font-medium tracking-wider text-gray-300">Universidad de Guanajuato</p>
            <h2 class="mt-6 text-3xl font-bold text-white md:text-5xl">Diego Armando Gutiérrez Ayala <br>
                Ingeniería en Sistemas Computacionales</h2>
            <div class="flex justify-center mt-12">
                <a class="px-8 py-2 text-lg font-medium text-white">
                    <svg class="w-10 h-10 animate-bounce" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></a>
            </div>
        </div>
    </section>
    
    
    <section>
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="items-center md:flex md:space-x-6">
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-semibold text-white">Aplicaciones de Internet<br> Dr. José Ruíz Pinales</h3>
                    <p class="max-w-md mt-4 text-gray-200">Proyecto final. Consiste en pequeño e-commerce, en el cual podemos iniciar sesión y registrar
                    productos, así como comprarlos.<br>Podemos, también, visualizar las compras que hemos realizado y editar los datos del usuario con el que nos
                    registramos.</p>
                </div>
    
                <div class="mt-8 md:mt-0 md:w-1/2">
                    <div class="flex items-center justify-center">
                        <div class="max-w-md">
                            <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;"
                                src="https://images.unsplash.com/photo-1618346136472-090de27fe8b4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=673&q=80">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section>
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="px-8 py-12 bg-gray-800 rounded-md md:px-20 md:flex md:items-center md:justify-between">
                <div>
                    <h3 class="text-2xl font-semibold text-white">Tecnologías utilizadas</h3>
                    <p class="max-w-md mt-4 text-gray-400">Php usando el MVC para gestionar el backend y las sesiones del usuario. Html y CSS junto al
                    frameword Tailwind CSS para el diseño. Javascript vanilla para funcionalidad del lado del cliente.</p>
                </div>

                <div class="grid grid-flow-col grid-rows-2 grid-cols-3 gap-6 place-items-center mt-6 md:mt-0 md:ml-16">
                    <div class="transform scale-110 -rotate-12">
                        <!-- Php -->
                        <img class="h-20" src="<?= URL::file('Icons/phpIcon.png') ?>" alt="tailwindIcon">
                    </div>
                    <div class="col-start-3 transform rotate-12 translate-x-2 translate-y-15">
                        <!-- Html5 -->
                        <img class="h-20" src="<?= URL::file('Icons/htmlIcon.png') ?>" alt="tailwindIcon">
                    </div>
                    <div class="transform scale-90 translate-y-5">
                        <!-- Css3 -->
                        <img class="h-20" src="<?= URL::file('Icons/cssIcon.png') ?>" alt="tailwindIcon">
                    </div>
                    <div class="transform translate-y-8 scale-90">
                        <!-- Javascript -->
                        <img class="h-20" src="<?= URL::file('Icons/javascriptIcon.png') ?>" alt="tailwindIcon">
                    </div>
                    <div class="row-start-1 col-start-2 col-span-2 transform scale-90 translate-x-1 translate-y-4">
                        <!-- Tailwindcss -->
                        <img class="h-20" src="<?= URL::file('Icons/tailwindIcon.png') ?>" alt="tailwindIcon">
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section>
        <div class="max-w-5xl px-6 py-16 mx-auto text-center">
            <h2 class="text-3xl font-semibold text-white">Datos completos del alumno <br>y la materia.</h2>
            <p class="max-w-lg mx-auto mt-4 text-gray-200">
                Diego Armando Gutiérrez Ayala | NUA: 147151 <br>
                Aplicaciones de Internet Semestre Agosto - Diciembre 2021 <br>
                Impartida por el Dr. José Ruíz Pinales <br>
                Universidad de Guanajuato - DICIS
            </p>
    
            <img class="object-cover object-center w-full mt-16 rounded-md shadow h-80"
                src="https://images.unsplash.com/photo-1530733466490-8532d717ba34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80">
        </div>
    </section>
    
</div>
<?php
	require 'Views/layouts/footer.php';
?>
