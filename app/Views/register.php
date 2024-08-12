<?= $this->extend('layouts/app') ?>

<?= $this->section('login') ?>
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <div class="d-flex justify-content-center py-4">
          <a href="index.html" class="logo d-flex align-items-center w-auto">
              <div class="row">
                  <div class="col-md-5">
                      <img src="assets/img/gojek.svg" alt="" sizes="500">
                  </div>
                  <div class="col-md-7">
                      <span class="d-none d-lg-block">Payment Gojek</span>
                  </div>
              </div>
          </a>
        </div><!-- End Logo -->

        <div class="card mb-3">

          <div class="card-body">

            <div class="pt-4 pb-2">
              <h5 class="card-title text-center pb-0 fs-4">Register Your Account</h5>
            </div>

            <form class="row g-3 needs-validation" novalidate action="<?= base_url('register'); ?>" method="POST">
            <div class="col-12">
                <label for="yourUsername" class="form-label">Name</label>
                <div class="input-group has-validation">
                  <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please enter your name.</div>
                </div>
              </div>
              <div class="col-12">
                <label for="yourUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                  <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                  <input type="text" name="username" class="form-control" id="yourUsername" required>
                  <div class="invalid-feedback">Please enter your username.</div>
                </div>
              </div>

              <div class="col-12">
                <label for="yourPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="yourPassword" required>
                <div class="invalid-feedback">Please enter your password!</div>
                <input class="mt-3 mr-3" type="checkbox" onclick="myFunction()">  Show Password</input>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Register</button>
              </div>
            </form>
            
          </div>
        </div>
</section>
<?= $this->endSection() ?>
