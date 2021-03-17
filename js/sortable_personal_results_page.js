$(document).ready(function() {
    $('#table').DataTable( {
        columnDefs: [ {
            targets: [ 5 ],
            orderData: [ 5, 1 ]
        }],
        "searching": false,
        "paging": false,
        "order": [[2,"desc"]],
    } );
} );