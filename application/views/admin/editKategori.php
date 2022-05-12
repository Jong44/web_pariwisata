<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Form Tambah Data
            </div>
            <div class="card-body">
                <form action="<?= site_url('admin/prosesEditKategori') ?>" method="post">
                <input type="hidden" name="id_kategori" value="<?= $admin['id_kategori'] ?>">
                    <div class="form-group">
                        <label >Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control"  value="<?= $admin['nama_kategori'] ?>" placeholder="Enter NIS">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>