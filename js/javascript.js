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
function details(id){
    $.post('details.php','id=' + id ,function (response){
        $("#table-div").html(response);
    });
}
function editPerson(id){
    $.post('editPerson.php','id=' + id ,function (response){
        $("#table-div").html(response);
    });
}
function showDeadForm(){
    let checkbox = $("#invalidCheck");
    if(checkbox.is(':checked')){
        $('#deathForm').css({'display':'block'});
    }
    else{
        $('#deathForm').css({'display':'none'});
    }

}