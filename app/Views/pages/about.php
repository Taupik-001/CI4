<?= $this->extend('user_layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <?php foreach($alamat as $a) : ?>
        <div class="col-12 col-lg-6">
            <h1><?= $a['tipe']; ?></h1>
            <h2><?= $a['alamat']; ?></h2>
            <h3><?= $a['kota']; ?></h3>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>