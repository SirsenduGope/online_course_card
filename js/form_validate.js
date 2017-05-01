$(document).ready(function(){
    /*$("#faculty_updt:input").attr('disabled',true);
    $("faculty_updt:input").attr("disabled",true);*/
    $("#faculty_updt").hide();
    $("#show").click(function(){
        $("#faculty_updt").show();
    });
    $("#add").click(function(){
        var temp = $("#primary_add").val();
        alert(temp);
        $("#local_add").focus();
        $("#local_add").val(temp);
    });
});
