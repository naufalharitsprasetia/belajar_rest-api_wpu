<?php 

$data = file_get_contents('pizza.json');
$menu = json_decode($data,true);

$menu = $menu["menu"];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WPU HUT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid ms-4">
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width="120"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">All Menu</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid ms-4">
        <div class="row mt-3">
            <div class="col">
                <h1>All Menu</h1>
            </div>
        </div>
    </div>

    <div class="row ms-4">
        <?php foreach($menu as $row) : ?>
        <div class="col-md-4">
            <div class="card mb-3" style="width: 18rem;">
                <img src="img/menu/<?= $row["gambar"]; ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $row["nama"]; ?></h5>
                    <h5 class="card-title"><?= $row["deskripsi"]; ?></h5>
                    <p class="card-text"><?= $row["harga"]; ?></p>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</body>

</html>