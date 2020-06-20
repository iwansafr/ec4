<script src="/AdminLte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/AdminLte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="/AdminLte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/AdminLte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/AdminLte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/AdminLte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="/AdminLte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/AdminLte/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('.data_table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>