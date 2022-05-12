<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Admin</title>

	<link href="<?= base_url('assets')?>/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
<nav id="sidebar" class="sidebar js-sidebar">

			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Menu Admin</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= site_url('admin')?>">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= site_url('admin/tambah_berita')?>">
              <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Tambah Berita</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= site_url('admin/kategori')?>">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Kategori</span>
            </a>
					</li>

					<li class="sidebar-item">
					<a class="sidebar-link" href="<?= site_url('admin/berita')?>">
              <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">List Berita</span>
            </a>
					</li>	


					<li class="sidebar-header">
						User
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= site_url('admin/data_user')?>">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Data User</span>
            </a>
					</li>

					<li class="sidebar-item">
					<a class="sidebar-link" href="<?= site_url('admin/tampil_admin')?>">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Data Admin</span>
            </a>
					</li>
				</ul>
			</div>
		</nav>
		<script src="<?= base_url('assets')?>/js/app.js"></script>
</body>