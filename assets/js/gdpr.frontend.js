
$(document).ready(function () {
    
    
    var tables = localized_object_frontend.tables;
    $.each(tables, function (key, data) {
        var table = $(data).DataTable({
            lengthChange: false,
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });

        tables_wrapers = data + '_wrapper .col-md-6:eq(0)';

        table.buttons().container()
            .appendTo(tables_wrapers );
    });
});


$(document).on('click', '#btn-submit', function(e) {
    e.preventDefault();
    swal({
        title: gdpra,
        text: gdprb,
        type: 'warning',
        showCancelButton: true,
        confirmButtonClass: 'btn btn-confirm mt-2',
        cancelButtonClass: 'btn btn-cancel ml-2 mt-2',
        confirmButtonText: gdprc,

    }).then(function () {
        swal({
                title: gdprd,
                text: gdpre,
                type: 'success',
                confirmButtonClass: 'btn btn-confirm mt-2',
                closeOnCancel: false,
                allowOutsideClick: false
            }
        ).then(function (result) {
        $('#wgdpr_delete_comments_form').submit();
    })
    })
});


