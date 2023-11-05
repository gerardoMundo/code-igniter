<?= $this->extend('home') ?>

<?= $this->section('content') ?>
<div class="container-lg">
    <h2 class="text-primary">Datos del Usuario</h2>
    <div class="row align-items-center">
        <div class="col col-lg-6 align-center">
            <p>Nombre: <?= $formularioData['nombre'] ?></p>
            <p>Correo Electrónico: <?= $formularioData['correo'] ?></p>
            <p>Rol: <?= $formularioData['rol'] ?></p>
        </div>
        <div class="col col-lg-6 align-center">
            <h4 class="text-primary">Subir Archivos al Servidor Local</h4>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
