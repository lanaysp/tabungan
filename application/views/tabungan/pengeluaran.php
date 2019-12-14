 <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pengeluaran</h1>
          </div>
          <div class="card">
                  <div class="card-header">
                    <h4>Form Pengeluaran</h4>
                    <div class="card-header-action">
                      <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-plus"></i></a>
                    </div>
                  </div>
                  <div class="collapse" id="mycard-collapse">
                    <div class="card-body">
                       <form action="<?= base_url('action/pengeluaran'); ?>" method="post">
                     <div class="row">
                      <div class="form-group col-md-4">
                      <label>Jumlah Pengeluaran</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            Rp.
                          </div>
                        </div>
                        <input type="text" name="nominal" class="form-control currency" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group col-md-5">
                      <label>Keterangan</label>
                    <textarea  name="ket" class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 73px;"></textarea>
                  </div>
                       
                      
                       
                      </div>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
                </div>
  
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tabel Pengeluaran</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="tbn">
                        <thead>
                          <tr>
                            <th  class="text-center">
                             NO
                            </th>
                            <th  class="text-center">Tanggal Masuk</th>
                            <th>Uang Keluar</th>
                            <th  class="text-center">Keterangan</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody >
                          <?php if (empty($tabungan)) : ?>
                            <td colspan="5">
                            Data Kosong.
                            </td>
                        <?php endif; ?>
                        <?php  $i = 1; ?>
                        <?php foreach ($tabungan as $pln) : ?>
                        <tr>
                        <th  class="text-center"><?= $i ;?></th>
                        <td  class="text-center"><?= $pln['tgl_masuk']; ?></td>
                        <td>Rp.<?= number_format($pln['nominal']) ; ?></td>
                        <td  class="text-center"><?= $pln['keterangan']; ?></td>
                        <td>
                          <a href="#" class="btn btn-primary addMenuButton" data-toggle="modal" data-target="#detailModal">Detail</a>
                           <?php if ($user['role_id'] == 1): ?>
                          <a href="<?= base_url(); ?>action/hapuspengeluaran/<?= $pln['id']; ?>" class="btn btn-danger">Hapus</a>
                            
                          <?php endif ?>
                        </td>
                      </tr>
                      <?php $i++ ; ?>
                      <?php endforeach; ?>
                            
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="section-body">
          </div>
        </section>
      </div>
        <!-- Modal -->
<div class="modal fade" id="detailModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Tabungan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('action/detail'); ?>" method="post">
                 <div class="modal-body">
                  <div class="form-group">
                    <label for="jenis_tabungan"> Jenis Tabungan</label>
                   <input type="text" class="form-control" value="<?= $pln['type']; ?>" disabled >
                </div>
                <div class="form-group">
                    <label for="jumlah"> Jumlah Rp.</label>
                    <input type="text" class="form-control" value="<?= number_format($pln['nominal']); ?>" id="jumlah" disabled >
                </div>
                <div class="form-group">
                    <label for="tgl_inpt">Tanggal Input</label>
                    <input type="text" class="form-control" value="<?= $pln['tgl_masuk']; ?>" id="tgl_inpt" disabled >
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 73px;" disabled> <?= $pln['keterangan']; ?></textarea>
                </div>
                 </div>
            </form>
        </div>
    </div>
</div>