    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="card-body font-weight-bold text-center border m-2">
                <div class="container">
                    <div class="row">
                        <div class="mt-lg-3 mx-auto">
                            <h3 class="text-center">
                                Daftar Prodi STT-NF
                            </h3>
                            <div class="col-lg-9 input-data mx-auto border-success p-3 rounded-lg" style="border: 3px dashed;">
                                <form action="<?= base_url(); ?>prodi/create" method="post">
                                    <h3 class="text-lg-center">Form Data Program Studi</h3>
                                    <div class="input-group flex-nowrap d-flex flex-column" style="gap: 5px;">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Kode</span>
                                            <input type="text" name="kode" class="form-control" placeholder="Kode Prodi" aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Nama</span>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Program Studi" aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="addon-wrapping">Kaprodi</span>
                                            <input type="text" name="kaprodi" class="form-control" placeholder="Nama Kepala Program Studi" aria-label="Username" aria-describedby="addon-wrapping" required>
                                        </div>
                                        <input class="btn btn-success w-25 mx-auto" type="submit" value="Submit">
                                    </div>
                                </form>
                            </div>
                            <table class="table table-hover table-striped text-center mt-lg-3">
                                <thead class="bg-info">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Program Studi</th>
                                        <th>Kaprodi</th>
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
                                            <td><?= $row->kode ?></td>
                                            <td><?= $row->nama ?></td>
                                            <td><?= $row->kaprodi ?></td>
                                            <td>
                                                <a class="btn btn-info" href="<?= base_url(); ?>prodi/halaman_detail/<?= $row->id; ?>">Detail</a>
                                                <a class="btn btn-success" href="<?= base_url(); ?>prodi/halaman_edit/<?= $row->id; ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?= base_url(); ?>prodi/deleteDBprodi/<?= $row->id; ?>">Delete</a>
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