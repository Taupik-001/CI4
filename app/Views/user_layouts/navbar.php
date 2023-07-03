<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="#" class="navbar-brand">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a href="<?= base_url('/'); ?>" class="nav-item nav-link <?php if ($page == 'Home') echo 'active'; ?>">Home</a>
                <a href="<?= base_url('/about'); ?>" class="nav-item nav-link <?php if ($page == 'About') echo 'active'; ?>">About</a>
                <a href="<?= base_url('/faq'); ?>" class="nav-item nav-link <?php if ($page == 'FAQ') echo 'active'; ?>">FAQ</a>
                <a href="<?= base_url('/contact'); ?>" class="nav-item nav-link <?php if ($page == 'Contact') echo 'active'; ?>">Contact</a>
                <a href="<?= base_url('/disable'); ?>" class="nav-item nav-link disabled" tabindex="-1" aria-disabled="true">Disabled Button</a>
            </div>
        </div>
    </div>
</nav>