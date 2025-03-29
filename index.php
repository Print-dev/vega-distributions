<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black">

    <nav class="bg-black text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">

            <!-- Contenedor Izquierdo (Logo + Enlaces) -->
            <div class="flex items-center space-x-8">
                <img src="https://res.cloudinary.com/dynpy0r4v/image/upload/v1742818076/vegaimagenes/esawybumfjhhujupw5pa.png" width="60" alt="Logo">
                <div class="flex space-x-12">
                    <a href="#" class="text-xl font-light">Vende tu música</a>
                    <a href="#" class="text-xl font-light">Herramientas para artistas</a>
                    <a href="#" class="text-xl font-light">Precios</a>
                    <a href="#" class="text-xl font-light">Blog</a>
                    <a href="#" class="text-xl font-light">Soporte</a>
                </div>
            </div>

            <!-- Contenedor Derecho (Botones) -->
            <div class="flex space-x-4">
                <button class="px-4 py-2 border border-white rounded-lg">Iniciar sesión</button>
                <button class="px-4 py-2 bg-white text-black rounded-lg">Registrarse</button>
            </div>

            <!-- Menú móvil (oculto en escritorio) -->
            <button class="md:hidden block text-white focus:outline-none">
                ☰
            </button>

        </div>
    </nav>


    <!-- Sección -->

    <h1 class="text-3xl font-light text-white">
        Que tu
        <span class="bg-white text-black px-2 py-1 rounded shadow">arte</span>
        se escuche
        <span class="text-gray-500">en todos lados</span>
    </h1>


</body>

</html>