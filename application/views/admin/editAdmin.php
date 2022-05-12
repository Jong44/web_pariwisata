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
                <form action="<?= site_url('admin/prosesEditAdmin') ?>" method="post">
                <input type="hidden" name="id_user" value="<?= $admin['id_user'] ?>">
                    <div class="form-group">
                        <label >First Name</label>
                        <input type="text" name="first_name" class="form-control"  value="<?= $admin['first_name'] ?>"  placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label >Last Name</label>
                        <input type="text" name="last_name" class="form-control"  value="<?= $admin['last_name'] ?>"  placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                        <label >Username</label>
                        <input type="text" name="username" class="form-control"  value="<?= $admin['username'] ?>" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" name="email" class="form-control"  value="<?= $admin['email'] ?>"  placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" name="password" class="form-control"  value="<?= $admin['password'] ?>"  placeholder="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>