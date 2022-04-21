<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
    
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PEMOGRAMAN WEB 2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">PRAKTIKUM 4</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                Pilih Tugas Praktikum
              </div>
              <div class="list-group">
              <a href="p4_lingkaran.php" class="list-group-item list-group-item-action">1. Lingkaran</a>
              <a href="p4_daftar_mahasiswa.php" class="list-group-item list-group-item-action">2. Daftar Mahasiswa</a>
              <a href="p4_nilai_mahasiswa.php" class="list-group-item list-group-item-action">3. Nilai Mahasiswa</a>
              <a href="p4_persegi_panjang.php" class="list-group-item list-group-item-action">4. Persegi Panjang</a>
            </div> 
              <!-- /.card-body -->
              <div class="card-footer">
                Pemograman Web Lanjutan
                <br>
                Dosen : Sirojul Munir S.Si,M.Kom
                <br>
                <br>
                <a class="btn btn-primary" href="index.php" role="button">Back</a>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php
include_once 'footer.php';
?>