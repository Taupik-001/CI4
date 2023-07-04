<?= $this->extend('user_layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="container p-3 my-5">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="m-0">List Anime</h1>
                    <button class="btn btn-outline-primary btn-md"><span class="far fa-plus-square"></span></button>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <?php foreach($anime as $a) : ?>
            <div class="col-12 col-lg-6 border">
                <div class="container p-3">
                    <label for=""><?= $a['total_episode']; ?></label>
                    <div class="container d-flex justify-content-center align-items-center">
                        <div class="image-container" style="width: 500px; height: 300px; background-image: url('<?= base_url('assets/images/'); ?><?= $a['image']; ?>'); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
                    </div>
                    <h1><?= $a['title']; ?></h1>
                    <p><?= $a['description']; ?></p>
                    <div class="content">
                        <div class="float-start mb-3">
                            <button class="btn btn-primary">
                                See Details
                            </button>
                        </div>
                        <div class="float-end mb-3">
                            <h3><?= $a['release_date']; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>