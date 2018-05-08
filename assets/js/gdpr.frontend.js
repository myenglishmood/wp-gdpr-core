$(document).ready(function() {


            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });



            $('#datatable-buttons').DataTable();



            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });

$(document).ready(function() {


            var table = $('#datatable-buttons2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });



            $('#datatable-buttons2').DataTable();


            table.buttons().container()
                .appendTo('#datatable-buttons2_wrapper .col-md-6:eq(0)');
        });