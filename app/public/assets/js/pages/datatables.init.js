$(document).ready(function(){
  $("#datatable").DataTable(),
  $("#datatable-buttons").DataTable(
    {
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
      buttons:["copy","excel","pdf","colvis"]}).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),$(".dataTables_length select").addClass("form-select form-select-sm")});
