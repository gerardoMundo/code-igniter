<?= $this->extend('home') ?>

<?= $this->section('content') ?>
<?php setlocale(LC_TIME, 'es_ES.UTF-8'); ?>
    <div class="container">
        <?php foreach ($posts as $item): ?>
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <strong>Usuario <?=$item['user'];?></strong>
                    <small>
                        <?=strftime("%A, %d, de %B de %Y %I:%M", strtotime($item['posted_time']));?>
                    </small>
                    <p class="card-text">
                        <?=$item['content'];?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?= $this->endSection() ?>