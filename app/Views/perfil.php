<?= $this->extend('home') ?>

<?= $this->section('content') ?>
<div class="container-lg">
    <div class="col row justify-content-center">
        <div class="col col-lg-6">
            <h4 class="text-primary">Datos del Usuario</h4>
            <?php if ($formularioData): ?>
                <p>Nombre: <?= $formularioData['nombre'] ?></p>
                <p>Correo Electrónico: <?= $formularioData['correo'] ?></p>
                <p>Rol: <?= $formularioData['rol'] ?></p>
            <?php else: ?>
                <p>No hay datos del formulario disponibles.</p>
            <?php endif; ?>
        </div>
        <div class="col col-lg-6">
            <h4 class="text-secondary">Otros datos del usuario:</h4>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

