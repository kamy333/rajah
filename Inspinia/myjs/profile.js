/**
 * Created by Kamran on 2/13/2017.
 */


function updateRecord(thisVar) {
    var  href=$(thisVar).data('newhref');
    var newUrl = "ajax/profile.php"+href;
    // alert(newUrl);

    RemoveListenersToDos();

    $.get(newUrl, function (data, status, xhr) {
        // alert(data);
        $('#smallTodolist').html(data);
        addListenersToDos();
        addListenersh5href();
    });




}
function RemoveListenersToDos() {
    // $( "#table_result" ).off( "click","a.button-edit-form , a.button-add-form" );
    $("a.smallToDoListChecklink").off("click");
    $("#h5href").off("click");

}

function addListenersToDos() {
    $("a.smallToDoListChecklink").on("click", function () {
        event.preventDefault();
        // alert('hello profile');
        updateRecord(this);
    });
}


function addListenersh5href() {
    $("#h5href").on("click", function () {
        event.preventDefault();
        // alert('hello profile');
        updateRecord(this);
    });
}

addListenersToDos();
addListenersh5href();