    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="card-body font-weight-bold text-center border m-2">
                <div class="container">
                    <div class="row">
                        <div class="mt-lg-3 mx-auto">
                            <h3 class="text-center">
                                Daftar Dosen STT-NF
                            </h3>
                            <div class="col-lg-9 input-data mx-auto border-success p-3 rounded-lg" style="border: 3px dashed;">
                                <form action="<?= base_url('dosen/create'); ?>" method="post">
                                    <h3 class="text-lg-center">Form Data dosen</h3>
                                    <div class="input-group flex-nowrap d-flex flex-column" style="gap: 5px;">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">NIDN</span>
                                            <input type="text" name="nidn" class="form-control" placeholder="Nomer Induk dosen" aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Nama</span>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Gender</span>
                                            <input type="text" name="gender" class="form-control" placeholder="Jenis Kelamin" aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Tempat Lahir</span>
                                            <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Tanggal Lahir</span>
                                            <input type="date" name="tgl_lahir" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Pendidikan kkhir</span>
                                            <input type="text" name="pendidikan_akhir" class="form-control" placeholder="Pendidikan Akhir" aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Program Studi</span>
                                            <input type="text" name="prodi_kode" class="form-control" placeholder="Program Studi" aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                        <input class="btn btn-success w-25 mx-auto" type="submit" value="Submit">
                                    </div>
                                </form>
                            </div>
                            <table class="table table-hover table-striped text-center mt-lg-3">
                                <thead class="bg-info">
                                    <tr>
                                        <th>No</th>
                                        <th>nidn</th>
                                        <th>Nama</th>
                                        <th>Gender</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>pendidikan_akhir</th>
                                        <th>Program Studi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($isi_db as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $nomor ?></td>
                                            <td><?= $row->nidn ?></td>
                                            <td><?= $row->nama ?></td>
                                            <td><?= $row->gender ?></td>
                                            <td><?= $row->tmp_lahir ?></td>
                                            <td><?= $row->tgl_lahir ?></td>
                                            <td><?= $row->pendidikan_akhir ?></td>
                                            <td><?= $row->prodi_kode ?></td>
                                            <td>
                                                <a class="btn btn-info" href="<?= base_url(); ?>dosen/halaman_detail/<?= $row->id; ?>">Detail</a>
                                                <a class="btn btn-success" href="<?= base_url(); ?>dosen/halaman_edit/<?= $row->id; ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?= base_url(); ?>dosen/deleteDBdosen/<?= $row->id; ?>">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                        $nomor++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    </div>