<head>
<title>
    Register
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
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('<?= base_url('assets') ?>/img/slide2.png');
        height: 300px;
        "><span class="mask bg-gradient-primary opacity-4"></span></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Sign up now</h2>
          <form action="<?= site_url('Auth/svRegister')?>" method="post">
            
            <div class="form-outline mb-4">
              <input type="text" name="username" class="form-control" />
              <label class="form-label">Enter Username</label>
            </div>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text"  name="first_name" class="form-control" />
                  <label class="form-label">First name</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" name="last_name" class="form-control" />
                  <label class="form-label">Last name</label>
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="email" class="form-control" />
              <label class="form-label">Email address</label>
            </div>

            <!-- Password input -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="password" name="password" class="form-control" />
                  <label class="form-label">Enter Password</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="password" name="repeatpass" class="form-control" />
                  <label class="form-label">Repeat Password</label>
                </div>
              </div>
            </div>

            
            <!-- Submit button -->
            <button type="submit" class="btn bg-gradient-primary w-auto me-2">Submit</button>



            <!-- Register buttons -->
            <div class="text-center">
              <p>or sign up with:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
            <a href="<?= site_url()?>Auth/index" class='small text-info' >Sudah memiliki akun?</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

<!-- Script -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"
></script>
</body>
