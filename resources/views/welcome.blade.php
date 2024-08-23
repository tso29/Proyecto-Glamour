<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamour - Inicio</title>
    @vite('resources/css/app.css') 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-VS9cI5+yGVZs0Rgl0oyEbI99HtE8BhOpzIVAsAeySkT3TYYwrHi86WZ4h1eVSsImG70dEKdKXjBOm3lq2n/2jQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="font-sans text-gray-800 bg-gray-100">

    <header class="bg-teal-300 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">
                <a href="index.html" class="hover:underline">Glamour</a>
            </h1>
            <nav>
                <ul class="flex space-x-6 items-center">
                    <li class="relative group">
                        <a href="#" class="hover:underline">Ropa</a>
                        <ul class="absolute left-0 hidden mt-2 space-y-2 bg-white text-gray-800 group-hover:block">
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Blusas</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Pantalones</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Faldas</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Zapatos</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Accesorios</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Bolsos</a></li>
                        </ul>
                    </li>
                    <li class="relative group">
                        <a href="#" class="hover:underline">Música</a>
                        <ul class="absolute left-0 hidden mt-2 space-y-2 bg-white text-gray-800 group-hover:block">
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Rock</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Pop</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Jazz</a></li>
                        </ul>
                    </li>
                    <li class="relative group">
                        <a href="#" class="hover:underline">Comida</a>
                        <ul class="absolute left-0 hidden mt-2 space-y-2 bg-white text-gray-800 group-hover:block">
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Snacks</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Importados</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Postres</a></li>
                        </ul>
                    </li>
                    <!-- Agregar enlace de inicio de sesión -->
                    <li>
                        <a href="/login" class="bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded-md font-semibold">Iniciar Sesión</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="py-6">
        <section id="productos" class="container mx-auto">
            <h2 class="text-2xl font-bold mb-6 text-center">Productos Destacados</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="bg-white border border-gray-300 rounded-lg p-4 text-center">
                    <img src="producto1.jpg" alt="Producto 1" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-lg font-semibold">Top Corto Ajustado</h3>
                    <p class="text-gray-600 mb-4">Precio: $29.000</p>
                    <button class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-700">Comprar</button>
                </div>
                <div class="bg-white border border-gray-300 rounded-lg p-4 text-center">
                    <img src="producto2.jpg" alt="Producto 2" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-lg font-semibold">Pantalones de Chándal Holgados</h3>
                    <p class="text-gray-600 mb-4">Precio: $87.000</p>
                    <button class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-700">Comprar</button>
                </div>
                <div class="bg-white border border-gray-300 rounded-lg p-4 text-center">
                    <img src="producto3.jpg" alt="Producto 3" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-lg font-semibold">Zapatillas deportivas</h3>
                    <p class="text-gray-600 mb-4">Precio: $120.000</p>
                    <button class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-700">Comprar</button>
                </div>
            </div>
        </section>
    </main>

    <div class="fixed bottom-6 right-6 flex flex-col gap-2">
        <button id="scroll-to-top" class="bg-teal-300 text-white p-3 rounded-full shadow hover:bg-teal-400" title="Subir al inicio">
            <i class="fas fa-arrow-up"></i>
        </button>
        <button id="shopping-cart" class="bg-teal-300 text-white p-3 rounded-full shadow hover:bg-orange-500" title="Ver carrito">
            <i class="fas fa-shopping-cart"></i>
        </button>
    </div>

    <footer class="bg-teal-300 text-white py-4 text-center">
        <p>&copy; 2024 Glamour. Todos los derechos reservados.</p>
        <p><a href="#" class="hover:underline">Política de Privacidad</a> | <a href="#" class="hover:underline">Términos y Condiciones</a></p>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>