<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Clone</title>
    <script src="//cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./estilos.css">
    <script type="module" src="./js/agregarCarrito.js"></script>
    <script type="module" src="./js/verCarrito.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
</head>

<body class="bg-[#e3e6e6] text-[#0f1111] font-sans">
    <header class="text-white">
        <!-- Main Header -->
        <div class="bg-[#131921] px-4 py-2 flex flex-col lg:flex-row items-center gap-4">
            <!-- Logo -->
            <a href="/"
                class="logo p-2 border border-transparent hover:border-white cursor-pointer h-12 w-28 bg-[url(./img/logos.png)] bg-size-[350px] flex items-center">

            </a>

            <!-- Enviar a -->
            <div
                class="envios flex items-center p-2 border border-transparent hover:border-white cursor-pointer text-sm">
                <div class="ubicacion-icon mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-[#ccc] text-[12px] leading-3">Enviar a</span>
                    <span class="font-bold text-[14px]">Paraguay</span>
                </div>
            </div>

            <!-- Search Bar -->
            <form action="" method="get"
                class="flex-grow flex h-10 rounded-md overflow-hidden focus-within:ring-2 focus-within:ring-[#febd69]">
                <div
                    class="bg-[#f3f3f3] text-[#555] px-4 flex items-center text-sm border-r border-gray-300 cursor-pointer hover:bg-gray-200">
                    Todos <span class="ml-1 text-[10px]">▼</span>
                </div>
                <input type="text" class="flex-grow px-3 text-black outline-none" placeholder="Buscar en Amazon">
                <button class="bg-[#febd69] hover:bg-[#f3a847] px-4 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#333]" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </form>

            <!-- User Info & Cart -->
            <div class="flex items-center gap-1">
                <div class="p-2 border border-transparent hover:border-white cursor-pointer text-sm">
                    <div class="flex items-center gap-1">
                        <span class="font-bold">ES</span> <span class="text-[10px]">▼</span>
                    </div>
                </div>

                <a class="p-2 border border-transparent hover:border-white cursor-pointer text-sm flex flex-col">
                    <span class="text-[12px] leading-3">Hola, Identifícate</span>
                    <strong class="font-bold text-[14px]">Cuenta y Listas <span class="text-[10px]">▼</span></strong>
                </a>

                <div class="p-2 border border-transparent hover:border-white cursor-pointer text-sm flex flex-col">
                    <span class="text-[12px] leading-3">Devoluciones</span>
                    <strong class="font-bold text-[14px]">y pedidos</strong>
                </div>

                <a href="./carrito.html"
                    class="p-2 border border-transparent hover:border-white cursor-pointer flex flex-col items-end gap-1">
                    <div class="relative">
                        <span
                            class="contador-carrito absolute -top-1 right-2 text-[#f08804] font-bold text-base">0</span>
                        <figure class="block bg-[url(./img/logos.png)] w-12 h-12 carrito-logo">

                        </figure>
                    </div>
                    <span class="font-bold text-[14px] pb-1">Carrito</span>
                </a>
            </div>
        </div>

        <!-- Sub-header/Nav -->
        <nav class="bg-[#232f3e] px-4 py-1 flex flex-col lg:flex-row items-center gap-4 text-sm font-medium">
            <a href="#"
                class="flex items-center gap-1 p-1 px-2 border border-transparent hover:border-white cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                Todo
            </a>
            <a href="./carrito.html"
                class="p-1 px-2 border border-transparent hover:border-white cursor-pointer">Ofertas del Día</a>
            <a href="./carrito.html"
                class="p-1 px-2 border border-transparent hover:border-white cursor-pointer">Tarjetas de Regalo</a>
            <a href="./carrito.html"
                class="p-1 px-2 border border-transparent hover:border-white cursor-pointer">Vender</a>
            <a href="./carrito.html"
                class="p-1 px-2 border border-transparent hover:border-white cursor-pointer">Listas</a>
            <a href="./carrito.html" class="p-1 px-2 border border-transparent hover:border-white cursor-pointer">Prime
                Video</a>
            <a href="./carrito.html"
                class="p-1 px-2 border border-transparent hover:border-white cursor-pointer">Servicio al Cliente</a>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto my-8 px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Productos - Columna principal -->
            <section class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h1 class="text-3xl font-bold text-gray-900 mb-1">Carrito de compras</h1>
                    <p class="text-sm text-gray-600 mb-6 pb-4 border-b border-gray-200">
                        <span class="subtotal-cantidad">(0 productos)</span>
                    </p>
                    
                    <div class="contenedor-productos">
                        <!-- Los productos se cargarán aquí desde el localStorage -->
                        <div class="text-center py-12">
                            <p class="text-lg text-gray-600">Cargando productos...</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Resumen - Columna lateral -->
            <section class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-sm p-6 h-fit sticky top-4">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">Resumen de compra</h2>
                    
                    <div class="space-y-4 pb-4 border-b border-gray-200">
                        <div class="flex justify-between text-gray-700">
                            <span>Subtotal:</span>
                            <span class="total-amount">Gs. 0</span>
                        </div>
                        <div class="flex justify-between text-gray-700">
                            <span>Envío:</span>
                            <span class="text-green-600 font-medium">Gratis</span>
                        </div>
                        <div class="flex justify-between text-gray-700">
                            <span>Descuentos:</span>
                            <span>Gs. 0</span>
                        </div>
                    </div>

                    <div class="flex justify-between text-lg font-bold text-gray-900 mt-4 mb-6 pb-4 border-b border-gray-200">
                        <span>Total:</span>
                        <span class="total-amount text-red-600">Gs. 0</span>
                    </div>

                    <button class="comprar-todo w-full bg-[#febd69] hover:bg-[#f3a847] text-black font-bold py-3 rounded-lg transition duration-200 mb-3">
                        Proceder al pago
                    </button>

                    <a href="./index.html" class="block text-center text-[#147efb] hover:text-[#0a66c2] font-medium py-2">
                        Continuar comprando
                    </a>
                </div>
            </section>
        </div>
    </main>

    <footer class="mt-10 bg-[#232f3e] text-white">
        <div class="bg-[#37475a] py-4 text-center text-sm hover:bg-[#485769] cursor-pointer">
            Inicio de página
        </div>
        <section class="max-w-[1000px] mx-auto py-10 grid grid-cols-1 md:grid-cols-2 px-3 lg:grid-cols-4 gap-8">
            <div>
                <h6 class="font-bold mb-4">Conocernos</h6>
                <ul class="text-sm space-y-2 text-gray-300">
                    <li><a href="" class="hover:underline">Trabajar en Amazon</a></li>
                    <li><a href="" class="hover:underline">Blog</a></li>
                    <li><a href="" class="hover:underline">Acerca de Amazon</a></li>
                    <li><a href="" class="hover:underline">Relaciones con inversionistas</a></li>
                    <li><a href="" class="hover:underline">Dispositivos Amazon</a></li>
                    <li><a href="" class="hover:underline">Amazon Science</a></li>
                </ul>
            </div>
            <div>
                <h6 class="font-bold mb-4">Gana dinero con nosotros</h6>
                <ul class="text-sm space-y-2 text-gray-300">
                    <li><a href="" class="hover:underline">Vender productos en Amazon</a></li>
                    <li><a href="" class="hover:underline">Vender en Amazon Business</a></li>
                    <li><a href="" class="hover:underline">Vender aplicaciones en Amazon</a></li>
                    <li><a href="" class="hover:underline">Programa de afiliados</a></li>
                    <li><a href="" class="hover:underline">Anuncia tus productos</a></li>
                    <li><a href="" class="hover:underline">Publica tu libro en Kindle</a></li>
                </ul>
            </div>
            <div>
                <h6 class="font-bold mb-4">Productos de pago de Amazon</h6>
                <ul class="text-sm space-y-2 text-gray-300">
                    <li><a href="" class="hover:underline">Tarjetas de Amazon.com Store</a></li>
                    <li><a href="" class="hover:underline">Tarjetas de regalo</a></li>
                    <li><a href="" class="hover:underline">Amazon Cash</a></li>
                    <li><a href="" class="hover:underline">Recarga de cuenta</a></li>
                    <li><a href="" class="hover:underline">Conversor de divisas de Amazon</a></li>
                </ul>
            </div>
            <div>
                <h6 class="font-bold mb-4">Podemos ayudarte</h6>
                <ul class="text-sm space-y-2 text-gray-300">
                    <li><a href="" class="hover:underline">Amazon y el COVID-19</a></li>
                    <li><a href="" class="hover:underline">Tu cuenta</a></li>
                    <li><a href="" class="hover:underline">Tus pedidos</a></li>
                    <li><a href="" class="hover:underline">Tarifas de envío y políticas</a></li>
                    <li><a href="" class="hover:underline">Devoluciones y reemplazos</a></li>
                    <li><a href="" class="hover:underline">Administrar contenido y dispositivos</a></li>
                </ul>
            </div>
        </section>

        <section class="bg-[#131921] py-8 border-t border-gray-700 px-3">
            <ul class="flex justify-center flex-col md:flex-row gap-4 text-[12px] mb-2">
                <li><a href="/" class="hover:underline">Condiciones de uso</a></li>
                <li><a href="/" class="hover:underline">Aviso de privacidad</a></li>
                <li><a href="/" class="hover:underline">Aviso de Privacidad de Datos de Salud del Consumidor</a></li>
                <li><a href="/" class="hover:underline">Tus opciones de privacidad de los anuncios</a></li>
            </ul>
            <span class="block text-center text-[12px] text-gray-400">
                &copy; 2026 - E-Commerce de prueba
            </span>
        </section>
    </footer>
</body>

</html>