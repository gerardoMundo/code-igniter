<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema MVC</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header>
        <h1 class="text-primary text-center mt-4">Login de usuario</h1>
    </header>
    <form class="form-group" method="post" action="<?= site_url('formulario/login'); ?>">
        <div>
            <label class="mt-4" for="nombre">Nombre</label>
            <input class="form-control" type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label class="mt-4" for="correo">Correo Electrónico</label>
            <input class="form-control" type="email" id="correo" name="correo" required>
        </div>
        <div>
            <label class="mt-4" for="rol">Rol</label>
            <input class="form-control" type="text" id="rol" name="rol" required>
        </div>
        <div>
            <input class="btn btn-primary w-100 mt-4" type="submit" value="Crear nuevo usuario">
        </div>
    </form>
</div>
</body>
</html>



