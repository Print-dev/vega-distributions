<?php require_once '../header.php' ?>

<div class="container">
    <div class="row min-vh-100 d-flex">

        <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center">
            <img src="https://res.cloudinary.com/dynpy0r4v/image/upload/v1742818076/vegaimagenes/esawybumfjhhujupw5pa.png"
                width="300"
                alt="Logo"
                class="img-fluid">
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class=" bg-white p-4 rounded-3 shadow-sm">
                <h1 class="h3 mb-4 fw-normal text-center">¡Bienvenido de nuevo!</h1>

                <p class="text-center mb-4">
                    ¿Nuevo usuario? <a href="http://localhost/vega-distributions/views/signup/" class="text-decoration-none">ÚNETE AHORA</a>
                </p>

                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Dirección de correo electrónico</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>

                    <a href="http://localhost/vega-distributions/views/home/" class="w-100 btn btn-primary btn-lg mb-3" type="submit">CONTINUAR</a>

                    <div class="text-center mb-3">
                        <a href="#" class="text-decoration-none">¿Has olvidado tu contraseña?</a>
                    </div>

                    <div class="separator">O</div>

                    <button class="w-100 btn btn-outline-secondary mb-3 d-flex align-items-center justify-content-center">
                        <i class="bi bi-google me-2" style="color: #DB4437;"></i> Continuar con Google
                    </button>

                    <p class="text-muted small text-center mt-4">
                        Protegido por reCAPTCHA y sujeto a la
                        <a href="#" class="text-decoration-none">política de privacidad</a> y
                        <a href="#" class="text-decoration-none">términos de servicio</a> de Google.
                    </p>
                </form>
            </div>
        </div>

    </div>
</div>