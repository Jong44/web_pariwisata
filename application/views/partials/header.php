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
<header class="header-2">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="6000">
      <img src="<?= base_url('assets') ?>/img/slide1.png"  class="page-header min-vh-100 relative" alt="...">
      <span class="mask bg-gradient-primary opacity-4"></span>
      <div class="carousel-caption d-md-block">
      <h1 class="text-white pt-3 mt-n5">Yogya Pariwisata Website</h1>
      <p class="lead text-white mt-3"> Daftar wisata Daerah Istimewa Yogyakarta <br/> dari Dataran tinggi sampai Dataran rendah </p>  
      <br>  
      <br>  
      <br>
      <br>
      <br>
    </div>
    </div>
    <div class="carousel-item" data-bs-interval="6000">
    <img src="<?= base_url('assets') ?>/img/slide2.png"  class="page-header min-vh-100 relative" alt="...">
      <span class="mask bg-gradient-primary opacity-4"></span>
      <div class="carousel-caption d-md-block">
      <h1 class="text-white pt-3 mt-n5">Yogya Pariwisata Website</h1>
      <p class="lead text-white mt-3"> Daftar wisata Daerah Istimewa Yogyakarta <br/> dari Dataran tinggi sampai Dataran rendah </p>
      <br>  
      <br>  
      <br>
      <br>
      <br>  
    </div>
    </div>
    <div class="carousel-item" data-bs-interval="6000">
    <img src="<?= base_url('assets') ?>/img/slide3.png"  class="page-header min-vh-100 relative" alt="...">
      <span class="mask bg-gradient-primary opacity-4"></span>
      <div class="carousel-caption d-md-block">
      <h1 class="text-white pt-3 mt-n5">Yogya Pariwisata Website</h1>
      <p class="lead text-white mt-3"> Daftar wisata Daerah Istimewa Yogyakarta <br/> dari Dataran tinggi sampai Dataran rendah </p>  
      <br>  
      <br>  
      <br>
      <br>
      <br></div>
    </div>
  </div>
</div>
  
    
</header>


<!--   Core JS Files   -->
<script src="<?= base_url('assets') ?>/js/core/popper.min.js" type="text/javascript"></script>
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