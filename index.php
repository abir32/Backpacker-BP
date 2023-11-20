<?php 
include 'inc/header.php';
include 'connection/config.php';
?>

<section class="vh-100" style="background-image:url('assets/images/bg.jpg'); background-size:cover;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" method="POST" action="userRegisterAction.php">
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="name">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" required />
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="email">Your Email</label>
                        <input type="email" id="email" name="email" class="form-control" required />
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required />
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="password">Confirm Password</label>
                        <input type="password" id="password" name="conpassword" class="form-control" required />
                    </div>
                </div>
                <p>Already have an account? <a href="login.php">Login Now</a></p>
                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </div>
                </form>


              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="assets/images/side_img.png" alt="Sample image" class="img-fluid">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'inc/footer.php';?>
