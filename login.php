<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="login-container bg-white p-4 rounded shadow">
            <div class="text-center user-icon mb-3">
                <img src="img/user.png" alt="Ícono de usuario" class="rounded-circle" width="80">
            </div>
            <h2 class="text-dark text-center">Iniciar sesión</h2>
            <form action="views/home.php" method="post">
                <div class="form-group mt-4">
                    <input type="text" class="form-control" id="username" name="username" placeholder="ID de usuario" required>
                </div>
                <div class="form-group mt-3"> <!-- Añadido margen superior -->
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Iniciar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrip.js"></script>
</body>
</html>


