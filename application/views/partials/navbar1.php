<head>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="<?= base_url('assets') ?>/css/nucleo-icons.css" rel="stylesheet" />
<link href="<?= base_url('assets') ?>/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<!-- CSS Files -->


<link id="pagestyle" href="<?= base_url('assets') ?>/css/material-kit.css?v=3.0.2" rel="stylesheet" />

</head>
<body>
<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-5 py-2 start-0 end-0 mx-4">
  <div class="container-fluid px-0">
    <a class="navbar-brand font-weight-bolder ms-sm-3" href="<?= base_url() ?>">
      YPW
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-auto">
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
            Page
            <img src="<?= base_url('assets') ?>/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
          </a>
          <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
            <div class="d-none d-lg-block">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
            Landing Pages
          </h6>
          <a href="<?= site_url()?>welcome/about" class="dropdown-item border-radius-md">
            <span>About Us</span>
          </a>
          <a href="<?= site_url()?>welcome/chat" class="dropdown-item border-radius-md">
            <span>Contact Us</span>
          </a>
          <a href="./pages/author.html" class="dropdown-item border-radius-md">
            <span>Author</span>
          </a>
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
            Account
          </h6>
          <a href="<?= site_url()?>Auth/register" class="dropdown-item border-radius-md">
            <span>Registrasi</span>
          </a>
        </li>
        <a href="<?= site_url()?>Auth/index"class="nav-link me-3">
            Login
        </a>
        <li class="nav-item my-auto ms-3 ms-lg-0">
          
          <a href="https://www.creative-tim.com/product/material-kit-pro" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Upgrade to Pro</a>
          
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
</div></div></div>

<!--   Core JS Files   -->
<script src="<?= base_url('assets') ?>/js/core/popper.min.js" type="text/javascript"></>
<script src="<?= base_url('assets') ?>/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets') ?>/js/plugins/perfect-scrollbar.min.js"></script>




<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="<?= base_url('assets') ?>/js/plugins/countup.min.js"></script>





<script src="<?= base_url('assets') ?>/js/plugins/choices.min.js"></script>



<script src="<?= base_url('assets') ?>/js/plugins/prism.min.js"></script>
<script src="<?= base_url('assets') ?>/js/plugins/highlight.min.js"></script>



<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="<?= base_url('assets') ?>/js/plugins/rellax.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="<?= base_url('assets') ?>/js/plugins/tilt.min.js"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="<?= base_url('assets') ?>/js/plugins/choices.min.js"></script>


<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="<?= base_url('assets') ?>/js/plugins/parallax.min.js"></script>











<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="<?= base_url('assets') ?>/js/material-kit.min.js?v=3.0.2" type="text/javascript"></script>


<script type="text/javascript">

  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>

</body>