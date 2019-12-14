 <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tabungan</h1>
          </div>
			<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="tbn">
                        <thead>
                          <tr>
                            <th  class="text-center">
                             NO
                            </th>
                            <th>Type</th>
                            <th>Uang Masuk</th>
                            <th  class="text-center">Tanggal Masuk</th>
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
                        <?php foreach ($tabungan as $tbn) : ?>
                        <tr>
                        <th  class="text-center"><?= $i ;?></th>
                        <td><?= $tbn['type']; ?></td>
                        <td>Rp.<?= number_format($tbn['nominal']) ; ?></td>
                        <td  class="text-center"><?= $tbn['tgl_masuk']; ?></td>
                        <td  class="text-center"><?= $tbn['keterangan']; ?></td>
                        <td>
                          <a href="#" class="btn btn-primary addMenuButton" data-toggle="modal" data-target="#detailModal">Detail</a>
                          <?php if ($user['role_id'] == 1): ?>
                          <a href="<?= base_url(); ?>action/hapustabungan/<?= $tbn['id']; ?>" class="btn btn-danger">Hapus</a>
                            
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
                   <input type="text" class="form-control" value="<?= $tbn['type']; ?>" disabled >
                </div>
                <div class="form-group">
                    <label for="jumlah"> Jumlah Rp.</label>
                    <input type="text" class="form-control" value="<?= number_format($tbn['nominal']); ?>" id="jumlah" disabled >
                </div>
                <div class="form-group">
                    <label for="tgl_inpt">Tanggal Input</label>
                    <input type="text" class="form-control" value="<?= $tbn['tgl_masuk']; ?>" id="tgl_inpt" disabled >
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 73px;" disabled> <?= $tbn['keterangan']; ?></textarea>
                </div>
                 </div>
            </form>
        </div>
    </div>
</div>