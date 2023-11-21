<?= $this->extend('home') ?>

<?= $this->section('content') ?>
<div class="container-lg">
    <div class="col row justify-content-center">
        <div class="col col-lg-6">
            <h4 class="text-primary">Cargar un nuevo documento</h4>
            <form class="form" method="post" enctype="multipart/form-data">
                <input class="form-control" title="documentos" type="file" name="documento" required />
                <button class="btn btn-primary mt-4" type="submit">Cargar nuevo documento</button>
            </form>
        </div>
        <div class="col col-lg-6">
            <h4 class="text-secondary">Documentos agregados:</h4>
            <?php if (!empty($documents)): ?>
                <ul>
                    <?php foreach ($documents as $document): ?>
                        <li class="mt-4">
                            <?= $document; ?>
                            <a class="btn btn-danger"
                               href="<?=
                               site_url('documents/deleteDocument/' . $document); ?>"
                               onclick="return confirm('¿Estás seguro de que deseas eliminar este documento?')">
                                Eliminar
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No hay documentos disponibles.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
