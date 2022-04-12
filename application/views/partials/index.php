<!DOCTYPE html>
<html lang="en" itemscope itemtype="#">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title>
  Halaman utama
</title>

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->
<link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.2" rel="stylesheet" />

</head>
<body>
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

<section class="pt-3 pb-4" id="count-stats">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto py-3">
        <div class="row">
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"><span id="state1" countTo="70">0</span>+</h1>
              <h5 class="mt-3">Wisata Dalam kota</h5>
              <p class="text-sm font-weight-normal">From buttons, to inputs, navbars, alerts or cards, you are covered</p>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"> <span id="state2" countTo="15">0</span>+</h1>
              <h5 class="mt-3">Wisata Dataran tinggi</h5>
              <p class="text-sm font-weight-normal">Mix the sections, change the colors and unleash your creativity</p>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary" id="state3" countTo="4">0</h1>
              <h5 class="mt-3">Wisata Dataran rendah</h5>
              <p class="text-sm font-weight-normal">Save 3-4 weeks of work when you use our pre-made pages for your website</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="my-5 py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
        <div class="rotating-card-container">
          <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
            <div class="front front-background" style="background-image: url(); background-size: cover;">
              <div class="card-body py-7 text-center">
                <i class="material-icons text-white text-4xl my-3">touch_app</i>
                <h3 class="text-white">Feel the <br /> Material Kit</h3>
                <p class="text-white opacity-8">All the Bootstrap components that you need in a development have been re-design with the new look.</p>
              </div>
            </div>
            <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
              <div class="card-body pt-7 text-center">
                <h3 class="text-white">Discover More</h3>
                <p class="text-white opacity-8"> You will save a lot of time going from prototyping to full-functional code because all elements are implemented.</p>
                <a href=".//sections/page-sections/hero-sections.html" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Start with Headers</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ms-auto">
        <div class="row justify-content-start">
          <div class="col-md-6">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
              <h5 class="font-weight-bolder mt-3">Full Documentation</h5>
              <p class="pe-5">Built by developers for developers. Check the foundation and you will find everything inside our documentation.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
              <h5 class="font-weight-bolder mt-3">Bootstrap 5 Ready</h5>
              <p class="pe-3">The world’s most popular front-end open source toolkit, featuring Sass variables and mixins.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-start mt-5">
          <div class="col-md-6 mt-3">
            <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
            <h5 class="font-weight-bolder mt-3">Save Time & Money</h5>
            <p class="pe-5">Creating your design from scratch with dedicated designers can be very expensive. Start with our Design System.</p>
          </div>
          <div class="col-md-6 mt-3">
            <div class="info">
              <i class="material-icons text-gradient text-primary text-3xl">devices</i>
              <h5 class="font-weight-bolder mt-3">Fully Responsive</h5>
              <p class="pe-3">Regardless of the screen size, the website content will naturally fit the given resolution.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="<?= base_url('assets') ?>/js/material-kit.min.js?v=3.0.2" type="text/javascript"></script>
</body>