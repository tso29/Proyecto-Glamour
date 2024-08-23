<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans text-gray-800 bg-gray-100">
    <div class="container mx-auto max-w-md mt-10 p-6 bg-white border border-gray-300 rounded-lg shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Iniciar Sesión</h2>
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold mb-2">Correo Electrónico</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full border border-gray-300 p-2 rounded-md">
                @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-semibold mb-2">Contraseña</label>
                <input type="password" id="password" name="password" required class="w-full border border-gray-300 p-2 rounded-md">
                @error('password')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white py-2 px-4 rounded-md w-full">Iniciar Sesión</button>
        </form>
    </div>
    @vite('resources/js/app.js')
</body>
</html>