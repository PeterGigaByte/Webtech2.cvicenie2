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
function showAddPlacing(){
    let checkbox = $("#placing-checkbox");
    if(checkbox.is(':checked')){
        $('#placing-form').css({'display':'block'});
        $('#save-placing').css({'display':'block'});
    }
    else{
        $('#placing-form').css({'display':'none'});
        $('#save-placing').css({'display':'none'});
    }
}
function addPerson(){
    $.post('addPerson.php',function (response){
        $("#table-div").html(response);
    });
}
function deletePerson_default(id){
    let type = "default";
    $.ajax({
        type: "POST",
        url:  "databaseControllers/delete.php",

        data: 'type='+type+'&id='+id,
        success: function(){
            $.get('table_default.php',function (data){
                $("#table-div").html(data);
            })

        }
    });
}
function deletePerson_top10(id){
    let type = "top10";
    $.ajax({
        type: "POST",
        url:  "databaseControllers/delete.php",
        data: 'type='+type+'&id='+id,

        success: function(){
            $.get('table_top10.php',function (data){
                $("#table-div").html(data);
            })
        }
    });
}
let firstNameInput,surNameInput,birthDayInput,birthPlaceInput,birthCountryInput,deathDayInput,deathPlaceInput,deathCountryInput;
function updateData(){
    firstNameInput = $('#firstNameInput').val();
    surNameInput = $('#surNameInput').val();
    birthDayInput = $('#birthDayInput').val();
    birthPlaceInput = $('#birthPlaceInput').val();
    birthCountryInput = $('#birthCountryInput').val();
    deathDayInput = $('#deathDayInput').val();
    deathPlaceInput = $('#deathPlaceInput').val();
    deathCountryInput = $('#deathCountryInput').val();
}
function editPersonPost(id){
    updateData();
    $.post('validation/sameName.php',{name:firstNameInput+surNameInput,id:id},function (response){
       if(response==="true"){
           $.post('databaseControllers/editPerson.php',{
               idInput:id,firstNameInput: firstNameInput,surNameInput: surNameInput,birthDayInput: birthDayInput
               ,birthPlaceInput: birthPlaceInput, birthCountryInput: birthCountryInput,deathDayInput: deathDayInput,
               deathPlaceInput: deathPlaceInput,deathCountryInput: deathCountryInput});
           details(id);
       }
       else if(response === "false"){
           $('#response').html("Tento olympionik už je zaregistrovaný.");
           $('#response2').html("Tento olympionik už je zaregistrovaný.");
       }
    });

}
function addPersonPost(){
    updateData();
    $.post('validation/sameName.php',{name:firstNameInput+surNameInput,id:"-1"},function (response) {
        if (response === "true") {
            $.post('databaseControllers/addPerson.php', {
                firstNameInput: firstNameInput, surNameInput: surNameInput, birthDayInput: birthDayInput
                , birthPlaceInput: birthPlaceInput, birthCountryInput: birthCountryInput, deathDayInput: deathDayInput,
                deathPlaceInput: deathPlaceInput, deathCountryInput: deathCountryInput
            },function (response){
                details(response)
            });

        }
        else if(response === "false"){
            $('#response').html("Tento olympionik už je zaregistrovaný.");
            $('#response2').html("Tento olympionik už je zaregistrovaný.");
        }
    });
}

let placing;
let discipline;
let oh_id;
function updateData2(){
     placing = $('#placingInput').val();
     discipline = $('#disciplineInput').val();
     oh_id = $('#ohInput').val();
}
function addPlacing(id_person){
    updateData2();
    $.post('databaseControllers/addPlacing.php',{id_person:id_person,
        id_oh:oh_id,placing:placing,discipline:discipline
    });
    details(id_person)
}
