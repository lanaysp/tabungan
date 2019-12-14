
          <div class="section-body">
          </div>
        </section>
      </div>

<footer class="main-footer">
 <div class="footer-left">
    Copyright &copy; 2018 <div class="bullet"></div> Develope <a href="https://lanaysp.com/">Maulana Yusup</a>
 </div>
 <div class="footer-right">
    2.3.0
 </div>
</footer>
</div>
</div>



<!-- General JS Scripts -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>

	<script src="<?= base_url('assets/'); ?>js/jquery.nicescroll.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/moment.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<!-- jquery mask -->
    <script src="<?= base_url('assets/'); ?>js/jquery.mask.min.js"></script>

<!-- Template JS File -->
<script src="<?= base_url(); ?>/assets/js/scripts.js"></script>
<script src="<?= base_url(); ?>/assets/js/custom.js"></script>

<!-- Page Specific JS File -->

 <!-- DataTables -->
    <script src="<?= base_url('assets/'); ?>datatable/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets/'); ?>datatable/datatables-bs4/js/dataTables.bootstrap4.js"></script>


<script>
  $(document).ready(function(){
    $('.currency').mask('0,000,000,000',{reverse:true});
  });
        $(function () {
    $('#tbn').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      
    });
  });
    </script>
</body>
</html>
