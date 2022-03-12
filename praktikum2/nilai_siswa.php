<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai</title>
</head>
<body>
    <h1>Form NIlai Siswa</h1> <hr>

    <form class="form-horizontal" method = "POST" action = "nilai_siswa.php">  
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" value="" size="30" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label> 
        <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
            <option value="Pancasila dan Pendidikan Kewarganegaraan">Pancasila dan Pendidikan Kewarganegaraan</option>
            <option value="Komunikasi Efektif">Komunikasi Efektif</option>
            <option value="Jaringan Komputer">Jaringan Komputer</option>
            <option value="User Interface & User Experience">User Interface & User Experience</option>
            <option value="Bahasa Inggris 1">Bahasa Inggris 1</option>
            <option value="Basis Data">Basis Data</option>
            <option value="Pemrograman Web 2">Pemrograman Web 2</option>
            <option value="Statistik dan Probabilitas">Statistik dan Probabilitas</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
        <input id="uts" name="nilai_uts" placeholder="Nilai UTS" type="text" value="" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
        <input id="uas" name="nilai_uas" placeholder="Nilai UAS" type="text" value="" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
        <div class="col-8">
        <input id="tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" value="" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="proses" type="submit" value="Simpan" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>

    <?php

    $proses = $_POST['proses'];
    $nama_siswa  = $_POST['nama'];
    $mata_kuliah  = $_POST['matkul'];
    $nilai_uts  = $_POST['nilai_uts'];
    $nilai_uas  = $_POST['nilai_uas'];
    $nilai_tugas  = $_POST['nilai_tugas'];
    $nilai_akhir = (0.3 * $nilai_uts) + (0.35 * $nilai_uas) +(0.35 * $nilai_tugas); 
    $grade_nilai ;
    
    if($nilai_akhir > 100){
        $grade_nilai = "I";
    }else if ($nilai_akhir >= 85){
        $grade_nilai = "A";
    }else if ($nilai_akhir >= 70){
        $grade_nilai = "B";
    }else if ($nilai_akhir >= 56){
        $grade_nilai = "C";
    }else if ($nilai_akhir >= 36){
        $grade_nilai = "D";
    }else if ($nilai_akhir >= 0){
        $grade_nilai = "E";
    }else {
        $grade_nilai = "I";
    }

    $predikat;

    if($nilai_akhir > 100){
        $predikat = "Tidak Ada";
    }else if ($nilai_akhir >= 85){
        $predikat = "Sangat Memuaskan";
    }else if ($nilai_akhir >= 70){
        $predikat = "Memuaskan";
    }else if ($nilai_akhir >= 56){
        $predikat = "Cukup";
    }else if ($nilai_akhir >= 36){
        $predikat = "Kurang";
    }else if ($nilai_akhir >= 0){
        $predikat = "Sangat  Kurang";
    }else {
        $predikat = "Tidak Ada";
    }

    
    if(!empty($proses)){
        echo 'Proses : '.$proses;
        echo '<br/> Nama : '.$nama_siswa;
        echo '<br/> Mata Kuliah :'.$mata_kuliah;
        echo '<br/> Nilai UTS :'.$nilai_uts;
        echo '<br/> Nilai UAS :'.$nilai_uas;
        echo '<br/> Nilai Tugas Praktikum :'.$nilai_tugas;
        echo '<br/> Nilai Akhir :'.$nilai_akhir;
        echo '<br/> Grade Nilai :'.$grade_nilai;
        echo '<br/> Predikat Anda :'.$predikat;
    }

        
    ?>



</body>
</html>