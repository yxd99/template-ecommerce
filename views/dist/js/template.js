$(function(){
  $(".data-table").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});