<?php
	$title = 'Login';
	require 'Views/layouts/auth_header.php';
?>
    <div class="min-h-screen flex flex-col items-center justify-center bg-trueGray-900" style="background-image: url(<?= URL::file('Icons/backgroundTopography.svg')?>);">
    <div
        class="
            flex flex-col
            bg-gray-800
            shadow-md
            px-4
            sm:px-6
            md:px-8
            lg:px-10
            py-8
            rounded-3xl
            w-50
            max-w-md
        "
    >
        <div class="font-medium self-center text-xl sm:text-3xl text-white">
            Bienvenido de vuelta 
        </div>
        <div class="mt-4 self-center text-xl sm:text-sm text-gray-200">
            Ingresa tus datos para acceder a tu cuenta 
        </div>
        <div class="mt-5">
          <form action="<?= URL::get('Auth', 'check') ?>" method="POST">
                <div class="flex flex-col mb-5">
                    <label
                        for="email"
                        class="mb-1 text-xs tracking-wide text-gray-300"
                        >Correo electrónico:</label
                    >
                    <div class="relative">
                        <div
                            class="
                                inline-flex
                                items-center
                                justify-center
                                absolute
                                left-0
                                top-0
                                h-full
                                w-10
                                text-gray-400
                            "
                        >
                            <i class="fas fa-at text-gray-800"></i>
                        </div>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            class="
                                text-sm
                                placeholder-gray-500
                                pl-10
                                pr-4
                                rounded-2xl
                                border border-gray-400
                                w-full
                                py-2
                                focus:outline-none focus:border-gray-800
                            "
                            placeholder="Ingresa tu email"
                        />
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <label
                        for="password"
                        class="
                            mb-1
                            text-xs
                            tracking-wide
                            text-gray-300
                        "
                        >Contraseña:</label
                    >
                    <div class="relative">
                        <div
                            class="
                                inline-flex
                                items-center
                                justify-center
                                absolute
                                left-0
                                top-0
                                h-full
                                w-10
                                text-gray-400
                            "
                        >
                            <span>
                                <i class="fas fa-lock text-gray-800"></i>
                            </span>
                        </div>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            class="
                                text-sm
                                placeholder-gray-500
                                pl-10
                                pr-4
                                rounded-2xl
                                border border-gray-400
                                w-full
                                py-2
                                focus:outline-none focus:border-gray-800
                            "
                            placeholder="Ingresa tu contraseña"
                        />
                    </div>
                </div>

                <div class="flex w-full">
                    <button
                        type="submit"
                        class="
                            flex
                            mt-2
                            items-center
                            justify-center
                            focus:outline-none
                            text-white text-sm
                            sm:text-base
                            bg-indigo-700
                            hover:bg-indigo-800
                            rounded-2xl
                            py-2
                            w-full
                            transition
                            duration-150
                            ease-in
                        "
                    >
                        <span class="mr-2 uppercase">Iniciar sesión</span>
                        <span>
                            <svg
                                class="h-6 w-6"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="flex justify-center items-center mt-6">
        <a
            href="#"
            target="_blank"
            class="
                inline-flex
                items-center
                text-gray-200
                font-medium
                text-xs text-center
            "
        >
            <span class="ml-2"
                >¿Aún no tiene una cuenta?
                <a href="<?= URL::get('Auth', 'signup') ?>" class="text-xs ml-2 text-indigo-600 font-semibold"
                    >Registrese ahora</a
                ></span
            >
        </a>
    </div>
</div>
<?php
	require 'Views/layouts/auth_footer.php';
?>
