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
              <a class="btn btn-success btn-flat" href="<?= site_url('admin/tambah_berita')?>"><span class="fa fa-plus"></span>  Add Berita</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
					          <th style="width:100px;">No</th>
                    <th>Judul</th>  
                    <th>Isi</th>
                    <th>Tanggal</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
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
                      <?=$u['judul'];?>
                    </td>
                    <td>
                      <?=$u['isi'];?>
                    </td>
                    <td>
                      <?=$u['tanggal_berita'];?>
                    </td>
                    <td>
                      <?=$u['kategori'];?>
                    </td>
                    <td>
                      <?=$u['gambar'];?>
                    </td>
                    <td style="text-align:right;">
                             <a class="btn" href="<?= site_url('admin/edit_berita')?>/<?=$u['id_berita']?>"><span class="fa fa-pencil"></span></a>
                             <a class="btn" href="<?= site_url('admin/hapus_berita')?>/<?=$u['id_berita']?>"><span class="fa fa-trash"></span></a>
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
<!-- ./wrapper -->

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url().'assets/plugins/select2/select2.full.min.js'?>"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.js'?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url().'assets/plugins/colorpicker/bootstrap-colorpicker.min.js'?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url().'assets/plugins/iCheck/icheck.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
<!-- Page script -->
<script>
          $(document).ready(function(){
            $('#example1').DataTable();
          });
          </script>
