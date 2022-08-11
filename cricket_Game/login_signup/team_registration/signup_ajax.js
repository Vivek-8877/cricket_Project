function get_data(v) {
    var id_idx = v.id.substring(v.id.length-3);
    var mobile_number = $("#mobile_number"+id_idx).val();
    $.ajax({
        method:"POST",
        url:"signup_function.php",
        data:{function2call: "get_data",mobile_number:mobile_number},
        dataType:"html",
        success:function(data) {
            // alert(data);
            if(!data) {
                alert("This Number is Not Registered. First Register with us.");
            } else {
                document.getElementById('name_col'+id_idx).style.display="";
                document.getElementById('send_otp_col'+id_idx).style.display="";
                document.getElementById('mobile_number'+id_idx).readOnly=true;
                document.getElementById('data_col'+id_idx).style.display="none";
                $("#name"+id_idx).html(data);
            }
        }
    });
}

function send_otp(v) {
    var id_idx = v.id.substring(v.id.length-3);
    var mobile_number = $("#mobile_number"+id_idx).val();
    $.ajax({
        method:"POST",
        url:"signup_function.php",
        data:{function2call: "send_otp",mobile_number:mobile_number,send_otp:true},
        dataType:"html",
        success:function(data) {
            if(!data) {
                alert("Please ! try after some time,due to technical isseus we are not getting you.");
            } else {
                alert(data);
                document.getElementById('send_otp_col'+id_idx).style.display="none";
                document.getElementById('otp_col'+id_idx).style.display="";
                document.getElementById('verify_otp_col'+id_idx).style.display="";
            }
        }
    });
}

function otp_verification(v) {
    var id_idx = v.id.substring(v.id.length-3);
    var entered_OTP = $("#OTP"+id_idx).val();
    var name = $("#name"+id_idx).text();
    var mobile_number = $("#mobile_number"+id_idx).val();
    $.ajax({
        method:"POST",
        url:"signup_function.php",
        data:{function2call: "otp_verification",OTP:entered_OTP,mobile_number:mobile_number},
        dataType:"html",
        success:function(data) {
            // alert(data);
            if(!data) {
                alert("Please ! Enter Valid OTP");
            } else {
                alert(name+" is added Successfully.");
                document.getElementById('otp_col'+id_idx).style.display="none";
                document.getElementById('verify_otp_col'+id_idx).style.display="none";
                document.getElementById('name'+id_idx).style.backgroundColor="#2cff00";
                document.getElementById('add_col'+id_idx).style.display="";
            }
        }
    });
}

function edit_player(v) {
    var id_idx = v.id.substring(v.id.length-3);
    document.getElementById('mobile_number'+id_idx).readOnly=false;
    document.getElementById('name_col'+id_idx).style.display="none";
    document.getElementById('add_col'+id_idx).style.display="none";
    document.getElementById('data_col'+id_idx).style.display="";
}



// CAPTCHA CODE VERIFICATION
$(document).ready(function(){
    $("#verify_otp").on('click',function(){
        var entered_value = $("#captcha").val();
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{function2call: "captcha_validation",captcha_code:entered_value},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! Enter Valid Captcha Code");
                } else {
                    alert("Captcha Code Verified");
                    document.getElementById('submit').disabled=false;
                    $("#submit").html("SUBMIT");
                    document.getElementById('captcha_code_col').style.display="none";
                    for(var i=100;i<count;i++) {
                        document.getElementById('add_col'+i).style.display="none";
                        console.log('add_col'+i);
                    }
                }
            }
        });
    });
});

var count =100;
function add_player(v) {
    var id_idx = v.id.substring(v.id.length-3);
    $("#add_more_player"+id_idx).html("Edit Player");
    document.getElementById('add_more_player'+id_idx).style.backgroundColor="#00d4ff";
    $("#add_more_player"+id_idx).attr("onclick","edit_player(this)");
    document.getElementById('add_more_player'+id_idx).id='edit_player'+id_idx;
    count++;
    if(count==102) {
        alert("You Can not add more than 15 player.");
        document.getElementById('captcha_code_col').style.display="";
        return;
    }
    $('#player').append(`<!-- Player_1 -->
    <div>
    <div class="form-row">
        <!-- Mobile Number -->
        <div class="col-md-3 mb-3">
            <label  for="mobile_number">Mobile Number</label>
            <input type="tel" class="form-control" name="mobile_number[]" id="mobile_number`+count+`" aria-describedby="mobile_numberHelp" placeholder="Enter Mobile Number of Player">
        </div>
        <!-- get data -->
        <div class="col-md-2 mb-3" id="data_col`+count+`">
            <label for="" style="color:white">Get Data</label>
            <button style="background-color:orange;color:white;" class="form-control" type="button" id="data`+count+`" class="btn btn-primary" onclick="get_data(this)">Get Data</button>
        </div>
        <!-- display Name -->
        <div class="col-md-2 mb-3" id="name_col`+count+`" style="display:none">
            <label for="">Player Name</label>
            <div class="input-group-append">
                <span style="background-color:red;" class="input-group-text font-weight-bold" id="name`+count+`"></span>
            </div>
        </div>
        <!-- Add Remove -->
        <div class="col-md-2 mb-3" id="add_col`+count+`" style="display:none;">
            <label for="" style="color:white">G</label>
            <button style="background-color:green;color:white;" class="form-control" type="button" id="add_more_player`+count+`" class="btn btn-primary" onclick="add_player(this)">Add More Player</button>
        </div>
    </div>

    <div class="form-row">
        <!-- send otp -->
        <div class="col-md-3 mb-3" id="send_otp_col`+count+`" style="display:none">
            <button style="background-color:pink;" class="form-control" type="button" id="send_otp`+count+`" class="btn btn-primary" onclick="send_otp(this)">Verify Player</button>
        </div>

        <!-- Enter OTP -->
        <div class="col-md-3 mb-3" id="otp_col`+count+`" style="display:none">
            <label  for="otp">Enter OTP Send On Player Email</label>
            <input style="text-align:center;" type="numeric" class="form-control" id="OTP`+count+`" placeholder="XXXXXX" required>
        </div>
        <!-- verify OTP -->
        <div class="col-md-2 mb-3" id="verify_otp_col`+count+`" style="display:none">
            <label for="" style="color:white">Verify OTP</label>
            <button style="background-color:#2cff00;color:white;" class="form-control" type="button" id="verify_OTP`+count+`" class="btn btn-primary" onclick="otp_verification(this)">Verify OTP</button>
        </div>
    </div>
    </div>`);
}