<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
</head>
<body>

<!-- style for form -->
<style>
    body { 
    margin-top: 50pt;
    margin-left: 300pt;
    margin-right: 300pt;
    margin-bottom: 300pt;
  }

  .login-form {
		width: 340px;
    	margin: 50px auto;
	}
  .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
}
</style>

<h3>Data Makanan</h3>
<br>
    <form class="body" method="post" action="<?php echo base_url().'Main_Controller/save_mk/'.$makanan->id_makanan;?>">
        <div class="form-group">
            <label>Id Makanan</label>
            <input type="text" name="id_makanan" class="form-control">
        </div>

        <div class="form-group">
            <label>Nama Makanan</label>
            <input type="text" name="nama_makanan" class="form-control">
        </div>

        <div class="form-group">
            <label>Pagi</label>
            <input type="text" name="pagi" class="form-control">
        </div>

        <div class="form-group">
            <label>Siang</label>
            <input type="text" name="siang" class="form-control">
        </div>

        <div class="form-group">
            <label>Malam</label>
            <input type="text" name="malam" class="form-control">
        </div>

        <div class="form-group">
            <label>Kalori</label>
            <input type="text" name="kalori" class="form-control">
        </div>

        <button rype="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>