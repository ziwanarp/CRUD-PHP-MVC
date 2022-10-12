<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <p class="card-text"><?= $data['mhs']['nim']; ?></p>
            <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
            <p class="card-text"><?= $data['mhs']['email']; ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa/" class="btn btn-primary">Kembali</a>