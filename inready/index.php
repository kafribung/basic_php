<?php 

require_once("core/init.php");

$error = "";
if (isset($_POST["submit"])) {
    $judul       = $_POST["jdl"];
    $kategori = $_POST["ktgr"];
    $isi          = $_POST["isi"];

    $nama       = $_FILES["gambar"]["name"];
    $asal         = $_FILES["gambar"]["tmp_name"];
    $error      = $_FILES["gambar"]["error"];
    $size        = $_FILES["gambar"]["size"];
    $type       = $_FILES["gambar"]["type"];

    $ex           = pathinfo($nama, PATHINFO_EXTENSION);

    $namaFile = "img/" . $nama;


    if (!empty(trim($judul)) && !empty(trim($kategori)) && !empty(trim($isi)) ) {

        if ($error == 0) {
            if ($size <= 1000000) {
                if ($type == "image/jpeg" || $type == "png") {
                  move_uploaded_file($asal, $namaFile );  

                  if (tambah_data($judul, $kategori, $isi, $nama ) ) {
                    $_SESSION["msg"] = "Data berhasil ditambahkan !";
                    header("Locaton: index.php");  
                } else echo "Data gagal ditambahkan!";
                
            } else $error = "Type gambar salah";
        }  else $error = "Gambar melebihi 1 MB !";
    }  else $error = "Gambar gagal di upload !";

} else $error = "Inputan tidak boleh kosong !";

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<body>

    <?php if (isset($_SESSION["msg"])): ?>
        <div class="alert alert-success" role="alert">
            <?php munculkan_session() ?>
        </div>
    <?php endif ?>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="img/inr.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
        Inready Workgroup</a>
        <form class="form-inline">
            <button class="btn btn-outline-success my-2 my-sm-0" type="logout">Logout</button>
        </form>
    </nav>
    <div class="container">
        <form method="post" action=""  enctype="multipart/form-data">
            <div class="form-group">
                <label for="Judul">Judul</label>
                <input type="text" class="form-control" id="Judul" name="jdl" aria-describedby="emailHelp"
                placeholder="Masukkan Judul">
            </div>

            <div class="form-group">
                <label for="kategori">Kategori Berita</label>
                <select class="custom-select" id="kategori" name="ktgr" >
                    <option value="">Pilih Kategori</option>
                    <option value="1">Keorganisasian</option>
                    <option value="Keorganisasian">Kerohanian</option>
                    <option value="Kewirausahaan">Kewirausahaan</option>
                    <option value="Logistik">Logistik</option>
                    <option value="Pemrograman">Pemrograman</option>
                    <option value="Design">Design</option>
                    <option value="Eksternal">Eksternal</option>
                    <option value="Internal">Internal</option>
                    <option value="Produksi">Produksi</option>
                    <option value="Rumah Tunggu">Rumah Tunggu</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Isi Berita</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="isi" rows="3"
                placeholder="Masukkan Isi Berita"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Gambar</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
            </div>

            <div id="error" class="form-group ">
                <?php if (!empty($error)): ?>
                    <p>Warning <?= $error; ?></p>
                <?php endif;?>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Posting</button>

        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>