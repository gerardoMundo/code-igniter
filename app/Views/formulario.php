<?= $this->extend('home') ?>

<?= $this->section('content') ?>
<form class="form-group" method="post" action="<?= base_url() ?>/formulario">
    <div>
        <label for="nombre">Nombre:</label>
        <input class="form-control" type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="correo">Correo Electrónico:</label>
        <input class="form-control" type="email" id="correo" name="correo" required>
    </div>
    <div>
        <label for="rol">Rol:</label>
        <input class="form-control" type="text" id="rol" name="rol" required>
    </div>
    <div>
        <input class="btn btn-primary w-100 mt-4" type="submit" value="Crear nuevo usuario">
    </div>
</form>
<?= $this->endSection() ?>
