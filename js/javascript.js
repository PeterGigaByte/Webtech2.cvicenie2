let table = $("#table-div");
function top10(){
    $.post('table_top10.php', function (response) {
        $("#table-div").html(response);
    });
}
function slovaks(){
    $.post('table_default.php', function (response) {
        $("#table-div").html(response);
    });
}