<head>
<!-- Tell the browser to be responsive to screen width -->
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- Ionicons -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  
</head>
<body>
<div>
<body>

<div>
  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Daftar Berita
      </h1>
      <br>
      

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           
          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" href="<?= site_url('admin/formKategori')?>"><span class="fa fa-plus"></span>  Add Berita</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
					          <th style="width:100px;">No</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  foreach ($admin as $u):
                    ?>
                  <tr>
                    <td>
                      <?= $no++; ?>
                    </td>
                    <td>
                      <?=$u['nama_kategori'];?>
                    </td>
                    <td>
                      <?=$u['tanggal'];?>
                    </td>
                    <td style="text-align:right;">
                             <a class="btn" href="<?= site_url('admin/editKategori')?>/<?=$u['id_kategori']?>"><span class="fa fa-pencil"></span></a>
                             <a class="btn" href="<?= site_url('admin/hapusKategori')?>/<?=$u['id_kategori']?>"><span class="fa fa-trash"></span></a>
                        </td>

                    


                  </tr>
                  <?php
                    endforeach;
                  ?>
    </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  
  <div class="control-sidebar-bg"></div>
</div>
<script>
          $(document).ready(function(){
            $('#example1').DataTable();
          });
          </script>
