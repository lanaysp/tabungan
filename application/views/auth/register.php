
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <!-- <img src="<?= base_url();?>/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle"> -->
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?= base_url('auth/register'); ?>">
                  <div class="row">


                     <div class="form-group col-12 ">
                     <label for="email">Nama :*</label>
                     <input id="name" type="tetx" class="form-control" name="name" autofocus>
                     <div class="invalid-feedback">
                     <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                     </div>
                     </div>

                     <div class="form-group col-12 ">
                    <label for="email">Email :*</label>
                    <input id="email" type="tetx" class="form-control" name="email">
                    <div class="invalid-feedback">
                     <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    </div>

                    <div class="form-group col-6">
                     <label for="frist_name">Password</label>
                     <input id="password1" type="password" class="form-control" name="password1" >
                     <div class="invalid-feedback">
                     <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                     </div>
                    </div>
                    <div class="form-group col-6">
                     <label for="last_name">Repeat Password</label>
                     <input id="password2" type="password" class="form-control" name="password2">
                    </div>
                    </div>

                  <div class="form-group col-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>

                </form>

              </div>
            </div>
            <div class="text-muted text-center">
               have an account? <a href="<?= base_url('auth'); ?>">Signin</a>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
          </div>
        </div>
