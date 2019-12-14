 <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tabungan Tambahan</h1>
          </div>
          <div class="card">
                  <div class="card-header">
                    <h4>Form Tambah Tabungan</h4>
                    <div class="card-header-action">
                      <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                  </div>
                  <div class="collapse show" id="mycard-collapse">
                    <div class="card-body">
                      <form action="<?= base_url('action/t_nabung'); ?>" method="post">
                        <input type="text" name="user" class="form-control" value="<?= $user['name']; ?>" hidden>
                      <div class="form-group col-md-4">
                      <label>Uang Yang Ditabungkan</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            Rp.
                          </div>
                        </div>
                        <input type="text" name="uang" class="form-control currency" autocomplete="off">
                      </div>
                    </div>
                      <div class="form-group col-md-4">
                      <label>Keterangan</label>
                    <textarea name="ket" class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 73px;"></textarea>
                  </div>
                        <button type="submit" class="btn btn-primary">Tabungkan</button>
                    </div>
                  </form>
                  </div>
                </div>
  
             
                </div>
              </div>
            </div>
          <div class="section-body">
          </div>
        </section>
      </div>