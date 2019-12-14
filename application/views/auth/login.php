  <div id="app">

    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">

          <div class="p-4 m-3">

            <!-- <img src="<?= base_url(); ?>/assets/img/stisla-fill.svg" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2"> -->
            <?= $this->session->flashdata('message'); ?>

  		    <?= form_error('email', '<small class="text-danger ">', '</small>'); ?>
            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Tabungan Kita</span></h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima.</p>
            <form method="POST" action="<?= base_url('auth'); ?>" class="needs-validation" novalidate="">
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="text" class="form-control" name="email" tabindex="1" value="<?= set_value('email'); ?>" required autofocus>
                <div class="invalid-feedback">
                   <?= form_error('email', '<small class="text-danger ">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" value="<?= set_value('password'); ?>" required>
                <div class="invalid-feedback">
                   <?= form_error('password', '<small class="text-danger ">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group text-right">
                <a href="auth-forgot-password.html" class="float-left mt-3">
                  Forgot Password?
                </a>
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

              <div class="mt-5 text-center">
                Don't have an account? <a href="<?= base_url('auth/register'); ?>">Create new one</a>
              </div>
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; Your Company. Made with by Lanaysp
              <div class="mt-2">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?= base_url(); ?>/assets/img/unsplash/login-bg.jpg">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Good Mornig</h1>
                <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
