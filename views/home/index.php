<?php require_once '../header.php' ?>

<nav class="navbar navbar-expand-lg bg-black text-white shadow sticky-sm-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="https://res.cloudinary.com/dynpy0r4v/image/upload/v1742818076/vegaimagenes/esawybumfjhhujupw5pa.png"
                width="60" alt="Logo" class="img-fluid">
        </a>

        <!-- Botón de menú para móviles -->
        <button class="navbar-toggler text-white border-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Contenido colapsable -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="w-100 d-flex flex-column flex-lg-row justify-content-between align-items-center">

                <!-- Menú de enlaces -->
                <ul class="navbar-nav text-center gap-2 gap-lg-3">
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold" href="#">VEGA MUSIC DISTRIBUTION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#vendemusica">Vende tu música</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Herramientas para artistas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#planes">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Soporte</a>
                    </li>
                </ul>

                <!-- Botones de acción -->
                <div class="d-flex flex-column flex-lg-row gap-2 mt-3 mt-lg-0">
                    <a href="http://localhost/vega-distributions/views/login/" class="btn btn-outline-light rounded-pill p-2 px-4">Iniciar sesión</a>
                    <a href="http://localhost/vega-distributions/views/signup/" class="btn btn-warning rounded-pill p-2 px-4">Registrarse</a>
                </div>

            </div>
        </div>
    </div>
</nav>