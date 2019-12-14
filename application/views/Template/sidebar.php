<div class="main-sidebar">
 <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?= base_url('Dashboard'); ?>"><i class="fas fa-piggy-bank"></i> <span> TABUNGAN KITA</span></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?= base_url('dashboard'); ?>"><i class="fas fa-piggy-bank"></i></a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
      <li><a class="nav-link" href="<?= base_url('Dashboard'); ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
      <li class="menu-header">Manage</li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-money-check"></i><span> Tabungan</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('m_tabung'); ?>">Lihat Tabung</a></li>
            <li><a class="nav-link" href="<?= base_url('m_tabung/t_tabungan'); ?>">Tabungan Tambahan</a></li>
            <li><a class="nav-link" href="<?= base_url('m_tabung/pengeluaran'); ?>">Pengeluaran</a></li>
          </ul>
        </li>

       <li class="menu-header">Agenda Menghabiskan Uang</li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-list-ul"></i><span> List </span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= base_url('error/comingsun') ?>">Traveling</a></li>
            <li><a class="nav-link" href="<?= base_url('error/comingsun') ?>">Shooping</a></li>
          </ul>
        </li>

      </ul>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="" id="modal-2" class="btn btn-primary btn-lg btn-block btn-icon-splitbtn btn-primary addMenuButton" data-toggle="modal" data-target="#mhsModal">
          <i class="fas fa-dollar-sign"></i> Tambah Tabungan
        </a>
      </div>
 </aside>
</div>

<!-- Modal -->
<div class="modal fade" id="mhsModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="mhsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mhsModalLabel">Serius Nabung</h5>
            </div>
            <form action="<?= base_url('action/nabung'); ?>" method="post">
                 <div class="modal-body text-center">
                  <button type="submit" class="btn btn-primary col-md-5 mb-2"><i class="far fa-thumbs-up"></i> Ya</button>
                  <button type="button" class="btn btn-danger col-md-5 mb-2" data-dismiss="modal"><i class="far fa-thumbs-down"></i> Tidak</button>
                 </div>
            </form>
        </div>
    </div>
</div>