<head>
<link rel="icon" 
      type="image/png" 
      href="<?= site_url('assets/img/logo-ypw.jpg')?>" /> 
    <title>
        Login
    </title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
    rel="stylesheet"
    />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('assets') ?>/css/material-kit.css?v=3.0.2" rel="stylesheet" />

</head>
<body>

<!-- Section: Design Block -->
<section class="my-5 py-5">
  <div class="container">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            The best offer <br />
            <span class="text-primary">for your tour</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
            quibusdam tempora at cupiditate quis eum maiores libero
            veritatis? Dicta facilis sint aliquid ipsum atque?
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="<?= site_url('Auth/proses')?>" method="post">
                
              <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" name="username" class="form-control" />
                  <label class="form-label" for="form3Example3">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" name="password" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

               

                <!-- Submit button -->
                <button type="submit" class="btn bg-gradient-primary w-auto me-2">Submit</button>

              

                <!-- Register buttons -->
                <div class="text-center">
                <p>or sign up with:</p>
                  <button type="button" class="btn btn-link btn-floating mx-5">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-5">
                    <i class="fab fa-google"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-5 ">
                    <i class="fab fa-twitter"></i>
                  </button>
                </div>
                <div class="text-center">
                <a href="<?= site_url()?>Auth/register" class='small text-info' >Belum memiliki akun?</a> 
                </div>

                  <?php
                      if($this->session->flashdata('pesan') <> ''){
                  ?>
                    <div class="alert alert-dismissible alert-danger">
                      <?php echo $this->session->flashdata('pesan');?>
                    </div>
                  <?php
                  }
                  ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

<!-- Script -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"
></script>
</body>