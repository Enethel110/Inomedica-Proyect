<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/stylesh.css"> <!-- Tu archivo CSS separado -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Inomedica</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="crear_usuario.php">Crear Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="crear_orden.php">Crear Orden</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="resetpassw.php">Restablecer Contraseña</a>
                </li>
            </ul>
            <div class="ml-auto">
                <a class="btn btn-danger btn-rounded" href="logout.php">Cerrar Sesión</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center text-dark">Bienvenido al Dashboard</h2>
        <p class="text-center text-muted">Selecciona una opción del menú para comenzar.</p>

        <div class="row mt-4">
            <div class="col-md-8">
                <!-- Aquí puedes añadir el contenido principal del dashboard -->
            </div>
            <div class="col-md-4 d-flex flex-column align-items-end"> <!-- Alinea los checkboxes a la derecha -->
                <h5 class="text-center">Filtrar por Estado</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="status1">
                    <label class="form-check-label" for="status1">Estado 1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="status2">
                    <label class="form-check-label" for="status2">Estado 2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="status3">
                    <label class="form-check-label" for="status3">Estado 3</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="status4">
                    <label class="form-check-label" for="status4">Estado 4</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="status5">
                    <label class="form-check-label" for="status5">Estado 5</label>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
