<div class="container mt-3">
    <div class="row">
        <div class="col6">
            <?= Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3 tambahData" data-bs-toggle="modal" data-bs-target="#FormModal">
                Tambah Data Mahasiswa
            </button>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-right">Detail</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/update/<?= $mhs['id']; ?>" class="badge bg-success float-right modalUbah" data-bs-toggle="modal" data-bs-target="#FormModal" data-id="<?= $mhs['id']; ?>">Edit</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-right ml-2" onclick="return confirm('hapus data <?= $mhs['nama']; ?>?');">hapus</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="FormModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">Nim</label>
                            <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukan Nim" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" required>
                        </div>
                        <div>
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan" required>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Manajemen Informatika">Manajemen Informatika</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>