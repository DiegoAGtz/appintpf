<?php
$title = 'Login';
require 'Views/layouts/auth_header.php';
?>
    <div class="flex flex-col bg-gray-800 shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-3xl w-50 max-w-md">
        <div class="font-medium self-center text-xl sm:text-3xl text-white">
            Bienvenido de vuelta
        </div>
        <div class="mt-4 self-center text-xl sm:text-sm text-gray-200">
            Ingresa tus datos para acceder a tu cuenta
        </div>
        <div class="mt-5">
            <form action="<?= URL::get('Auth', 'check') ?>" method="POST">
                <div class="flex flex-col mb-5">
                    <label for="email" class="mb-1 text-xs tracking-wide text-gray-300">Correo electrónico:</label>
                    <div class="relative">
                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </div>
                        <input id="email" type="email" name="email" class="text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-gray-800" placeholder="Ingresa tu email" />
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <label for="password" class="mb-1 text-xs tracking-wide text-gray-300">Contraseña:</label>
                    <div class="relative">
                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <input id="password" type="password" name="password" class="text-sm placeholder-gray-500 pl-10 pr-4 rounded-2xl border border-gray-400 w-full py-2 focus:outline-none focus:border-gray-80 " placeholder="Ingresa tu contraseña"/>
                    </div>
                </div>

                <div class="flex w-full">
                    <button type="submit" class="flex mt-2 items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-indigo-700 hover:bg-indigo-800 rounded-2xl py-2 w-full transition duration-150 ease-in">
                        <span class="mr-2 uppercase">Iniciar sesión</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="flex justify-center items-center mt-6">
        <a href="#" target="_blank" class="inline-flex items-center text-gray-200 font-medium text-xs text-center">
            <span class="ml-2">¿Aún no tiene una cuenta?
                <a href="<?= URL::get('Auth', 'signup') ?>" class="text-xs ml-2 text-indigo-600 font-semibold">Registrese ahora</a>
            </span>
        </a>
    </div>
<?php
require 'Views/layouts/auth_footer.php';
?>
