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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data User
      </h1>
      <br>

      <section>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           
          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" href="<?= site_url('admin/addAdmin')?>"><span class="fa fa-plus"></span>  Add Admin</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr>
                   
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>E-Mail</th>
                    <th>Password</th>
                    <th>Tanggal Daftar</th> 
                    <th style="text-align: center;">Aksi</th>
                     
                     
                   
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
                      <?=$u['first_name'];?>
                    </td>
                    <td>
                      <?=$u['last_name'];?>
                    </td>
                    <td>
                      <?=$u['username'];?>
                    </td>
                    <td>
                      <?=$u['email'];?>
                    </td>
                    <td>
                      <?=$u['password'];?>
                    </td>
                    <td>
                      <?=$u['tgl_daftar'];?>
                    </td>
                    <td style="text-align:center;">
                             <a class="btn" href="<?= site_url('admin/editAdmin')?>/<?=$u['id_user']?>"><span class="fa fa-pencil"></span></a>
                             <a class="btn" href="<?= site_url('admin/hapusAdmin')?>/<?=$u['id_user']?>"><span class="fa fa-trash"></span></a>
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
                </div>
                </div>
  <script>
          $(document).ready(function(){
            $('#example1').DataTable();
          });
          </script>