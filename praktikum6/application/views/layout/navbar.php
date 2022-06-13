<nav class="navbar navbar-expand-lg navbar-light" style="background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);">
    <a class="navbar-brand" href="<?= base_url() ?>">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Home') ? 'active' : '' ?>" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Mahasiswa') ? 'active' : '' ?>" href="<?= base_url() ?>mahasiswa/">Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Dosen') ? 'active' : '' ?>" href="<?= base_url() ?>dosen/">Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Mata Kuliah') ? 'active' : '' ?>" href="<?= base_url() ?>matkul/">Mata Kuliah</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>