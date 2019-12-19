<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../Skripsi/assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../Skripsi/assets/form/style.css">
    <script src="main.js"></script>
</head>
<body>
<h3>Data Pasien</h3>
<br>
    <form class="body" method="post" action="<?php echo base_url().'index.php/Admin_controller/update_pk/'.$pasien->id_pasien;?>">
        <div class="form-group">
            <label>Id Pasien</label>
            <input type="text" name="nama" class="form-control"  value="<?php echo $pasien->id_pasien?>" disabled>
        </div>

        <div class="form-group">
            <label>Nama</label>
            <input type="number" name="umur" class="form-control" value="<?php echo $pasien->nama_pasien?>">
        </div>

        <div class="form-group">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control"value="<?php echo $pasien->umur?>">
        </div>

        <div class="form-group">
            <label>Tinggi Badan</label>
            <input type="number" name="tb" class="form-control"value="<?php echo $pasien->tinggi_badan?>">
        </div>

        <div class="form-group">
            <label>Berat Badan</label>
            <input type="number" name="bb" class="form-control"value="<?php echo $pasien->berat_badan?>">
        </div>

        <div class="form-group">
            <label>Tingkat Hembuglobin</label>
            <input type="number" name="hb" class="form-control"value="<?php echo $pasien->hemuglobin?>">
        </div>

        <div class="form-group">
            <label>Lingkar Lengan Atas</label>
            <input type="number" name="la" class="form-control"value="<?php echo $pasien->lengan_atas?>">
        </div>

        <div class="form-group">
            <label>Lingkar lengan bawah</label>
            <input type="number" name="lb" class="form-control"value="<?php echo $pasien->lengan_bawah?>">
        </div>

        <div class="form-group">
            <label>Faktor Akivitas</label>
            <input type="text" name="fa" class="form-control"value="<?php echo $pasien->faktor_aktivitas?>">
        </div>

        <div class="form-group">
            <label>Faktor Stres</label>
            <input type="text" name="fs" class="form-control"value="<?php echo $pasien->faktor_stres?>">
        </div>

        <button rype="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>