<head>
<link href="<?= base_url('assets') ?>/css/css_user.css" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
rel="stylesheet"/>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"
rel="stylesheet"/>


</head>
<div class="wrapper bg-white mt-sm-5">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-danger btn-sm me-md-2" type="button" value="Go back!". onclick="history.back ()">Back</button>
</div>
    <h4 class="pb-4 border-bottom">Account settings</h4> 

    <form action="<?= site_url('user/proses_edit')?>" method="post">
    <input type="hidden" name="id_user" value="<?= $admin['id_user'] ?>">
    <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
        <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
            <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
        </div>
    </div>
    <div class="py-2">
    <div class="row py-2">
        <div class="col-md-12"> 
        <div class="row py-2">
            <div class="col-md-6"> 
                <label>First Name</label>  
                <input type="text" class="bg-light form-control" value="<?= $admin['first_name'] ?>" name="first_name" placeholder="First Name"> </div>
            <div class="col-md-6 pt-md-0 pt-3">
                 <label>Last Name</label> 
                 <input type="text" class="bg-light form-control" value="<?= $admin['last_name'] ?>" name="last_name" placeholder="Last Name"> </div>
        </div>
        <label for="firstname">Username</label> 
        <input type="text" class="bg-light form-control" value="<?= $admin['username'] ?>" name="username" placeholder="Username"> </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6"> 
                <label>Email Address</label>  
                <input type="email" class="bg-light form-control" value="<?= $admin['email'] ?>" name="email" placeholder="Email"> </div>
            <div class="col-md-6 pt-md-0 pt-3">
                 <label>Password</label> 
                 <input type="tel" class="bg-light form-control" value="<?= $admin['password'] ?>"  name="password" placeholder="Password"> </div>
        </div>
        
        <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3">Save Changes</button> 
        <button class="btn border button">Cancel</button> </div>
        <div class="d-sm-flex align-items-center pt-3" id="deactivate">
            <div> <b>Deactivate your account</b>
                <p>Your Account Will Deactivate</p>
            </div>
            <div class="ml-auto"> <a class="btn danger" href="<?= site_url('user/hapus_user')?>/<?=$admin['id_user']?>">Deactivate</a> </div>
        </div>
    </div>
</div>
</form>


<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
></script>