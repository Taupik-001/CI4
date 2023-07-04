<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= base_url('/'); ?>" class="nav-link <?php if ($page == 'Home') echo 'active'; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/about'); ?>" class="nav-link <?php if ($page == 'About') echo 'active'; ?>">About</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/faq'); ?>" class="nav-link <?php if ($page == 'FAQ') echo 'active'; ?>">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/contact'); ?>" class="nav-link <?php if ($page == 'Contact') echo 'active'; ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/anime'); ?>" class="nav-link <?php if ($page == 'Anime') echo 'active'; ?>">Anime</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/listicon'); ?>" class="nav-link <?php if ($page == 'ListIcon') echo 'active'; ?>">List Icon</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/disable'); ?>" class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled Button</a>
                </li>
            </ul>
        </div>
    </div>
</nav>