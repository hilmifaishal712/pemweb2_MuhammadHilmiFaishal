<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<?php 
    $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
    $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
    $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
    $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fixed Layout</h1>
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
                <h3 class="card-title">PRAKTIKUM 1 (ARRAY SISWA)</h3>

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
        
              </div>
              
              <center> <h2>TABEL SISWA</h2> </center><br>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NIM</th>
                <th scope="col">UTS</th>
                <th scope="col">UAS</th>
                <th scope="col">TUGAS</th>
            </tr>
        </thead>


        <tbody>

            <?php

                $number = 1;

                foreach ($ar_nilai as $ns) {
            ?>     

            <tr>
                <th scope="row"><?= $number;?> </th>
                <td><?= $ns["nim"];?></td>
                <td><?= $ns["uts"];?></td>
                <td><?= $ns["uas"];?></td>
                <td><?= $ns["tugas"];?></td>
            </tr>

            <?php

                    $number++;

                }

            ?>

            

        </tbody>


    </table>


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