<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurar Nueva Contraseña</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body style="background-color: #dbebfb;"> <!-- Color de fondo -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="login-container bg-white p-4 rounded shadow" style="background-color: #2CBCF4;"> <!-- Color de fondo del contenedor -->
            <h2 class="text-dark text-center">Nueva Contraseña</h2>
            <form action="procesar_nueva_contraseña.php" method="post">
                <div class="form-group mt-4">
                    <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Nueva Contraseña" required>
                </div>
                <div class="form-group mt-3">
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Nueva Contraseña" required>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>

     <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
