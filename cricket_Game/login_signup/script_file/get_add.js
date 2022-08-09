$(document).ready(function(){
    $("#state").on('change',function(){
    var state = $(this).val();
    // alert(state)
    $.ajax({
        method:"POST",
        url:"address/get_district.php",
        data:{state_id:state},
        dataType:"html",
        success:function(data) {
            // alert(data);
            $('#district').html(data);
        }
    });
});
});