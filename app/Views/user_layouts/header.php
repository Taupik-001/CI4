<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="#" class="navbar-brand">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav">
                    <a href="<?= base_url('/'); ?>" class="nav-item nav-link <?php if($page == 'Home') echo 'active'; ?>">Home</a>
                    <a href="<?= base_url('/about'); ?>" class="nav-item nav-link <?php if($page == 'About') echo 'active'; ?>">About</a>
                    <a href="<?= base_url('/faq'); ?>" class="nav-item nav-link <?php if($page == 'FAQ') echo 'active'; ?>">FAQ</a>
                    <a href="<?= base_url('/contact'); ?>" class="nav-item nav-link disabled" tabindex="-1" aria-disabled="true">Contact Disabled</a>
                </div>
            </div>
        </div>
    </nav>