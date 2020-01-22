</div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019-2020 <a href="https://www.stmi.ac.id">Politeknik STMI Jakarta</a>.</strong> All rights
    reserved.
  </footer>
		<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url()?>assets/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/datatable/datatables/dataTables.bootstrap.min.js"></script>
		<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
		<script src="<?=base_url()?>assets/dist/js/demo.js"></script>

    <script>
		$(document).ready(function(){    
    $('#example1').DataTable({ columnDefs: [{ "defaultContent": "-", "targets": "_all" }] });});

		</script>
</body>
</html>
