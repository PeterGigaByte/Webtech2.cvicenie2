$(document).ready(function() {
    $('#table').DataTable( {
        "searching": false,
        "paging": false,
        "order": [[2,"desc"]],
    } );
} );