<!-- Main Content -->
<div class="main-content">
 <section class="section">
    <div class="row">
      
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-chart">
            <canvas id="balance-chart" height="80"></canvas>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Jumlah Total Tabungan</h4>
            </div>
            <div class="card-body">
              Rp <?= number_format($uang_masuk['nominal']) ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-chart">
            <canvas id="sales-chart" height="80"></canvas>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Jumlah Pengeluaran</h4>
            </div>
            <div class="card-body">
              Rp <?= number_format($uang_keluar['nominal']) ?>
            </div>
          </div>
        </div>
      </div>
       <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-chart">
            <canvas id="sales-chart" height="80"></canvas>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Uang Terkumpul</h4>
            </div>
            <div class="card-body">
              Rp <?= number_format($uang_masuk['nominal'] - $uang_keluar['nominal']) ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>3 Data Terbaru</h4>
                  <div class="card-header-action">
                    <a href="<?= base_url('m_tabung'); ?>" class="btn btn-danger">Lihat Semua <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                        <tr>
                        <th>No</th>
                        <th>Type</th>
                        <th>Nominal</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        
                      </tr>
                        <?php if (empty($tbn)) : ?>
                            <td colspan="5">
                            Data Kosong.
                            </td>
                        <?php endif; ?>
                        <?php  $i = 1; ?>
                        <?php foreach ($tbn as $tbn) : ?>
                        <tr>
                        <th><?= $i ;?></th>
                        <td><?= $tbn['type']; ?></td>
                        <td>Rp.<?= number_format($tbn['nominal']) ; ?></td>
                        <td><?= $tbn['tgl_masuk']; ?></td>
                        <td><?= $tbn['keterangan']; ?></td>
                        
                      </tr>
                      <?php $i++ ; ?>
                      <?php endforeach; ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-hero">
                <div class="card-header">
                  <div class="card-icon">
                    <i class="far fa-question-circle"></i>
                  </div>
                  <h4><?= date("d-M-Y") ?></h4>
                  <div class="card-description mt-4"><h5><?= date('l'); ?></h5></div>
                </div>
                <div class="card-body p-0">
                  <div class="tickets-list">
                    <a href="#" class="ticket-item">
                      <div class="ticket-title">
                        <h4>Daftar Keinginan Bulan ini</h4>
                      </div>
                      <div class="ticket-info">
                        <div><span class="badge badge-danger">Segera</span></div>
                        <div class="bullet"></div>
                        <div class="text-primary">Coomingsun</div>
                      </div>
                    </a>
                    <a href="" class="ticket-item ticket-more">
                      View All <i class="fas fa-chevron-right"></i>
                    </a>
                  </div>
                </div>
              </div>
</section>
</div>
