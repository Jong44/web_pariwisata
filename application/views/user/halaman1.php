<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<div class="card-deck px-12 pt-8 ">
<?php foreach ($admin as $u): ?>
  <div class="card">

    <img src="<?= site_url('assets/img/artikel/').$u['gambar']?>" class="card-img-top" alt="<?= $u['judul']?>" style="width:489px" >
    <div class="card-body">
      <a href="<?= site_url('user/tampil_berita') ?>"><h5 class="card-title"><?= $u['judul'] ?></h5></a>
      <p class="card-text"><?= $u['isi'] ?></p>
      <p class="card-text"><small class="text-muted">Diposting <?= $u['tanggal_berita']?></small></p>
    </div>
  </div>
  <?php endforeach ?>
</div>

