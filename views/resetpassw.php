<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body style="background-color: #dbebfb;"> <!-- Color de fondo -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="login-container bg-white p-4 rounded shadow" style="background-color: #2CBCF4;"> <!-- Color de fondo del contenedor -->
            <h2 class="text-dark text-center">Restablecer Contraseña</h2>
            <form action="newpass.php" method="post">
                <div class="form-group mt-4">
                    <input type="text" class="form-control" id="id_user" name="id_user" placeholder="ID Usuario" required>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
               
            </form>
        </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
