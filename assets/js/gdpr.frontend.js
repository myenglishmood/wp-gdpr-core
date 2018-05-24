$(document).ready(function () {
    var tables = localized_object.tables;
    $.each(tables, function (key, data) {
        var table = $(data).DataTable({
            lengthChange: false,
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });

        tables_wrapers = data + '_wrapper .col-md-6:eq(0)';

        table.buttons().container()
            .appendTo(tables_wrapers );
    });

    $("table").addClass("table table-bordered table-bordered dt-responsive nowrap dataTable dtr-inline");
});
