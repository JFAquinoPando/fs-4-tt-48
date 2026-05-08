<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Clone</title>
    <script src="//cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js" defer></script>
    <script type="module" src="./js/swiper.js"></script>
    <script type="module" src="./js/agregarCarrito.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    
</head>

<body class="bg-[#e3e6e6] text-[#0f1111] font-sans">
    <header class="text-white">
        <!-- Main Header -->
        <div class="bg-[#131921] px-4 py-2 flex flex-col lg:flex-row items-center gap-4">
            <!-- Logo -->
            <div
                class="logo p-2 border border-transparent hover:border-white cursor-pointer h-12 w-28 bg-[url(./img/logos.png)] bg-size-[350px] flex items-center">

            </div>

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

    <main class="max-w-[1500px] mx-auto relative overflow-hidden">
        <!-- Hero Slider (Conceptual Background) -->
        <section class="carrusel slider relative h-[600px] -mb-80">
            <div class="swiper-wrapper">
                <img src="./img/banner1.jpg"
                    class="swiper-slide w-full h-full object-cover [mask-image:linear-gradient(to_bottom,rgba(0,0,0,1)_60%,transparent)]"
                    alt="Banner">
                <img src="./img/banner2.jpg"
                    class="swiper-slide w-full h-full object-cover [mask-image:linear-gradient(to_bottom,rgba(0,0,0,1)_60%,transparent)]"
                    alt="Banner">
                <img src="./img/banner1.jpg"
                    class="swiper-slide w-full h-full object-cover [mask-image:linear-gradient(to_bottom,rgba(0,0,0,1)_60%,transparent)]"
                    alt="Banner">
                <img src="./img/banner2.jpg"
                    class="swiper-slide w-full h-full object-cover [mask-image:linear-gradient(to_bottom,rgba(0,0,0,1)_60%,transparent)]"
                    alt="Banner">
                <img src="./img/banner1.jpg"
                    class="swiper-slide w-full h-full object-cover [mask-image:linear-gradient(to_bottom,rgba(0,0,0,1)_60%,transparent)]"
                    alt="Banner">
                <img src="./img/banner2.jpg"
                    class="swiper-slide w-full h-full object-cover [mask-image:linear-gradient(to_bottom,rgba(0,0,0,1)_60%,transparent)]"
                    alt="Banner">
            </div>

        </section>

        <!-- Categories Grid -->
        <section class="categorias grid md:grid-cols-2 lg:grid-cols-4 lg grid-cols-1 gap-6 px-6 relative z-10">
            <!-- Card 1 -->
            <article class="bg-white p-5 flex flex-col">
                <h3 class="text-[21px] font-bold mb-3">Mejora tu juego</h3>
                <div class="flex-grow" data-precio="500000" data-producto="PC Gamer">
                    <picture class="block mb-4 overflow-hidden">
                        <img src="./img/pc_.jpg" class="w-full h-[300px] object-cover" alt="PC">
                    </picture>
                    <div class="mt-auto">
                        <span class="text-[#007185] hover:text-[#c7511f] text-sm hover:underline cursor-pointer">Compra
                            Video Juegos</span>
                    </div>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="bg-white p-5 flex flex-col">
                <h3 class="text-[21px] font-bold mb-3">Novedades en hogar por menos de $50</h3>
                <div class="grid grid-cols-2 gap-x-4 gap-y-6 flex-grow mb-4">
                    <div class="flex flex-col" data-precio="45000" data-producto="Olla">
                        <picture class="h-[100px] bg-gray-100 flex items-center justify-center overflow-hidden mb-1">
                            <img src="./img/olla.jpg" class="w-full h-full object-cover" alt="Cocina y Comedor">
                        </picture>
                        <span class="text-[12px] leading-tight">Cocina y Comedor</span>
                    </div>
                    <div class="flex flex-col" data-precio="60000" data-producto="Latas">
                        <picture class="h-[100px] bg-gray-100 flex items-center justify-center overflow-hidden mb-1">
                            <img src="./img/lata.jpg" class="w-full h-full object-cover" alt="Mejora del hogar">
                        </picture>
                        <span class="text-[12px] leading-tight">Mejora del hogar</span>
                    </div>
                    <div class="flex flex-col" data-precio="50000" data-producto="Articulo de decoracion">
                        <picture class="h-[100px] bg-gray-100 flex items-center justify-center overflow-hidden mb-1">
                            <img src="./img/decoracion.jpg" class="w-full h-full object-cover" alt="Decoración">
                        </picture>
                        <span class="text-[12px] leading-tight">Decoración</span>
                    </div>
                    <div class="flex flex-col" data-precio="25000" data-producto="Almohada">
                        <picture class="h-[100px] bg-gray-100 flex items-center justify-center overflow-hidden mb-1">
                            <img src="./img/almohada.jpg" class="w-full h-full object-cover" alt="Ropa de cama y baño">
                        </picture>
                        <span class="text-[12px] leading-tight">Ropa de cama y baño</span>
                    </div>
                </div>
                <div class="mt-auto">
                    <span class="text-[#007185] hover:text-[#c7511f] text-sm hover:underline cursor-pointer">Compra lo
                        último desde casa</span>
                </div>
            </article>

            <!-- Card 3 (Placeholder for style matching) -->
            <article class="bg-white p-5 flex flex-col">
                <h3 class="text-[21px] font-bold mb-3">Ofertas relámpago</h3>
                <div class="flex-grow" data-precio="75000" data-producto="Olla 2">
                    <picture class="block mb-4 overflow-hidden">
                        <img src="./img/olla.jpg" class="w-full h-[300px] object-cover" alt="Ofertas">
                    </picture>
                    <div class="mt-auto">
                        <span class="text-[#007185] hover:text-[#c7511f] text-sm hover:underline cursor-pointer">Ver
                            todas las ofertas</span>
                    </div>
                </div>
            </article>

            <!-- Card 4 (Placeholder for style matching) -->
            <article class="bg-white p-5 flex flex-col">
                <h3 class="text-[21px] font-bold mb-3">Encuentra regalos para mamá</h3>
                <div class="grid grid-cols-2 gap-x-4 gap-y-6 flex-grow mb-4">
                    <div class="flex flex-col">
                        <div class="h-[100px] bg-[#f2e6ff] mb-1"></div>
                        <span class="text-[12px]">Ropa</span>
                    </div>
                    <div class="flex flex-col">
                        <div class="h-[100px] bg-[#f2e6ff] mb-1"></div>
                        <span class="text-[12px]">Zapatos</span>
                    </div>
                    <div class="flex flex-col">
                        <div class="h-[100px] bg-[#f2e6ff] mb-1"></div>
                        <span class="text-[12px]">Joyería</span>
                    </div>
                    <div class="flex flex-col">
                        <div class="h-[100px] bg-[#f2e6ff] mb-1"></div>
                        <span class="text-[12px]">Bolsos</span>
                    </div>
                </div>
                <div class="mt-auto">
                    <span class="text-[#007185] hover:text-[#c7511f] text-sm hover:underline cursor-pointer">Compra
                        regalos del Día de la Madre</span>
                </div>
            </article>
        </section>
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

    <!-- Chatbot UI -->
    <div id="chatbot-container" class="fixed bottom-4 right-4 z-50">
        <!-- Chat Button -->
        <button id="chat-toggle" class="bg-[#febd69] hover:bg-[#f3a847] text-[#131921] p-3 rounded-full shadow-lg flex items-center justify-center transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
            </svg>
        </button>

        <!-- Chat Window -->
        <div id="chat-window" class="hidden absolute bottom-16 right-0 w-80 md:w-96 bg-white rounded-lg shadow-2xl flex flex-col border border-gray-200 overflow-hidden transition-all duration-300">
            <!-- Header -->
            <div class="bg-[#232f3e] text-white p-4 flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                    <span class="font-bold">Asistente Virtual</span>
                </div>
                <button id="close-chat" class="text-gray-300 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Messages -->
            <div id="chat-messages" class="flex-grow p-4 h-80 overflow-y-auto bg-gray-50 flex flex-col gap-3">
                <div class="bg-gray-200 text-gray-800 p-3 rounded-lg rounded-tl-none max-w-[80%] text-sm">
                    ¡Hola! Soy tu asistente de Amazon Clone. ¿En qué puedo ayudarte hoy?
                </div>
            </div>

            <!-- Input -->
            <form id="chat-form" class="p-4 border-t border-gray-200 flex gap-2">
                @csrf
                <input type="text" id="chat-input" placeholder="Escribe tu mensaje..." class="flex-grow border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#febd69]">
                <button type="submit" class="bg-[#febd69] hover:bg-[#f3a847] p-2 rounded-md transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const chatToggle = document.getElementById('chat-toggle');
            const chatWindow = document.getElementById('chat-window');
            const closeChat = document.getElementById('close-chat');
            const chatForm = document.getElementById('chat-form');
            const chatInput = document.getElementById('chat-input');
            const chatMessages = document.getElementById('chat-messages');

            // Toggle chat window
            chatToggle.addEventListener('click', () => {
                chatWindow.classList.toggle('hidden');
                if (!chatWindow.classList.contains('hidden')) {
                    chatInput.focus();
                }
            });

            closeChat.addEventListener('click', () => {
                chatWindow.classList.add('hidden');
            });

            // Handle sending messages
            chatForm.addEventListener('submit', async (e) => {
                e.preventDefault();
                const message = chatInput.value.trim();
                if (!message) return;

                // Add user message to UI
                addMessage(message, 'user');
                chatInput.value = '';

                // Show typing indicator
                const typingId = addMessage('Escribiendo...', 'bot', true);

                try {
                    const response = await fetch('{{ route("chat") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                        },
                        body: JSON.stringify({ message })
                    });

                    const data = await response.json();
                    
                    // Remove typing indicator and add bot response
                    document.getElementById(typingId).remove();
                    
                    if (data.response) {
                        addMessage(data.response, 'bot');
                    } else {
                        addMessage('Lo siento, algo salió mal.', 'bot');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    document.getElementById(typingId).remove();
                    addMessage('Error de conexión.', 'bot');
                }
            });

            function addMessage(text, sender, isTyping = false) {
                const id = 'msg-' + Date.now();
                const div = document.createElement('div');
                div.id = id;
                div.className = sender === 'user' 
                    ? 'bg-[#232f3e] text-white p-3 rounded-lg rounded-tr-none self-end max-w-[80%] text-sm'
                    : 'bg-gray-200 text-gray-800 p-3 rounded-lg rounded-tl-none self-start max-w-[80%] text-sm chat-bot-message';
                
                if (sender === 'bot' && !isTyping) {
                    div.innerHTML = marked.parse(text);
                } else {
                    div.textContent = text;
                }
                
                chatMessages.appendChild(div);
                chatMessages.scrollTop = chatMessages.scrollHeight;
                return id;
            }
        });
    </script>
    <style>
        .chat-bot-message ul { list-style-type: disc; margin-left: 1.5rem; margin-bottom: 0.5rem; }
        .chat-bot-message ol { list-style-type: decimal; margin-left: 1.5rem; margin-bottom: 0.5rem; }
        .chat-bot-message p { margin-bottom: 0.5rem; }
        .chat-bot-message p:last-child { margin-bottom: 0; }
        .chat-bot-message strong { font-weight: bold; }
        .chat-bot-message em { font-style: italic; }
    </style>
</body>

</html>