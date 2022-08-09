// VERIFYING CAPTION MOBILE NUMBER AND GETTING NAME
$(document).ready(function(){
    $("#caption_mobile_number_data").on('click',function(){
        var mobile_number = $("#caption_mobile_number").val();
        // alert(mobile_number)
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{mobile_number:mobile_number},
            dataType:"html",
            success:function(data) {
                // alert(data);
                if(!data) {
                    alert("This Number is Not Registered. First Register with us.")
                } else {
                    document.getElementById('caption_player_name_col').style.display="";
                    document.getElementById('caption_send_otp_col').style.display="";
                    document.getElementById('caption_mobile_number').disabled=true;
                    document.getElementById('caption_mobile_number_data_col').style.display="none";
                    $('#caption_player_name').html(data);
                }
            }
        });
    });
});


// CAPTION OTP SENDER
$(document).ready(function(){
    $("#caption_send_otp").on('click',function(){
        var mobile_number = $("#caption_mobile_number").val();
        // alert(mobile_number)
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{mobile_number:mobile_number,send_otp:true},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! try after some time,due to technical isseus we are not getting you.");
                } else {
                    alert(data);
                    document.getElementById('caption_send_otp_col').style.display="none";
                    document.getElementById('caption_otp_col').style.display="";
                    document.getElementById('caption_verify_otp_col').style.display="";
                }
            }
        });
    });
});


// CAPTION OTP VERIFICATION
$(document).ready(function(){
    $("#caption_verify_OTP").on('click',function(){
        var entered_OTP = $("#caption_OTP").val();
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{OTP:entered_OTP},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! Enter Valid OTP");
                } else {
                    alert(data);
                    document.getElementById('caption_otp_col').style.display="none";
                    document.getElementById('caption_verify_otp_col').style.display="none";
                    document.getElementById('caption_player_name').style.backgroundColor="#2cff00";
                    document.getElementById('vice_caption').style.display="";
                }
            }
        });
    });
});


// VERIFYING VICE CAPTION MOBILE NUMBER AND GETTING NAME
$(document).ready(function(){
    $("#vice_caption_mobile_number_data").on('click',function(){
        var mobile_number = $("#vice_caption_mobile_number").val();
        // alert(mobile_number)
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{mobile_number:mobile_number},
            dataType:"html",
            success:function(data) {
                // alert(data);
                if(!data) {
                    alert("This Number is Not Registered. First Register with us.")
                } else {
                    document.getElementById('vice_caption_player_name_col').style.display="";
                    document.getElementById('vice_caption_send_otp_col').style.display="";
                    document.getElementById('vice_caption_mobile_number').disabled=true;
                    document.getElementById('vice_caption_mobile_number_data_col').style.display="none";
                    $('#vice_caption_player_name').html(data);
                }
            }
        });
    });
});


// VICE CAPTION OTP SENDER
$(document).ready(function(){
    $("#vice_caption_send_otp").on('click',function(){
        var mobile_number = $("#vice_caption_mobile_number").val();
        // alert(mobile_number)
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{mobile_number:mobile_number,send_otp:true},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! try after some time,due to technical isseus we are not getting you.");
                } else {
                    alert(data);
                    document.getElementById('vice_caption_send_otp_col').style.display="none";
                    document.getElementById('vice_caption_otp_col').style.display="";
                    document.getElementById('vice_caption_verify_otp_col').style.display="";
                }
            }
        });
    });
});


//VICE CAPTION OTP VERIFICATION
$(document).ready(function(){
    $("#vice_caption_verify_OTP").on('click',function(){
        var entered_OTP = $("#vice_caption_OTP").val();
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{OTP:entered_OTP},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! Enter Valid OTP");
                } else {
                    alert(data);
                    document.getElementById('vice_caption_otp_col').style.display="none";
                    document.getElementById('vice_caption_verify_otp_col').style.display="none";
                    document.getElementById('vice_caption_player_name').style.backgroundColor="#2cff00";
                    document.getElementById('player1').style.display="";
                }
            }
        });
    });
});


// VERIFYING PLAYER_1  MOBILE NUMBER AND GETTING NAME
$(document).ready(function(){
    $("#player1_mobile_number_data").on('click',function(){
        var mobile_number = $("#player1_mobile_number").val();
        // alert(mobile_number)
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{mobile_number:mobile_number},
            dataType:"html",
            success:function(data) {
                // alert(data);
                if(!data) {
                    alert("This Number is Not Registered. First Register with us.")
                } else {
                    document.getElementById('player1_name_col').style.display="";
                    document.getElementById('player1_send_otp_col').style.display="";
                    document.getElementById('player1_mobile_number').disabled=true;
                    document.getElementById('player1_mobile_number_data_col').style.display="none";
                    $('#player1_name').html(data);
                }
            }
        });
    });
});


// PLAYER_1 OTP SENDER
$(document).ready(function(){
    $("#player1_send_otp").on('click',function(){
        var mobile_number = $("#player1_mobile_number").val();
        // alert(mobile_number)
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{mobile_number:mobile_number,send_otp:true},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! try after some time,due to technical isseus we are not getting you.");
                } else {
                    alert(data);
                    document.getElementById('player1_send_otp_col').style.display="none";
                    document.getElementById('player1_otp_col').style.display="";
                    document.getElementById('player1_verify_otp_col').style.display="";
                }
            }
        });
    });
});


//PLAYER_1 OTP VERIFICATION
$(document).ready(function(){
    $("#player1_verify_OTP").on('click',function(){
        var entered_OTP = $("#player1_OTP").val();
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{OTP:entered_OTP},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! Enter Valid OTP");
                } else {
                    alert(data);
                    document.getElementById('player1_otp_col').style.display="none";
                    document.getElementById('player1_verify_otp_col').style.display="none";
                    document.getElementById('player1_name').style.backgroundColor="#2cff00";
                    document.getElementById('player2').style.display="";
                }
            }
        });
    });
});




// VERIFYING PLAYER_2  MOBILE NUMBER AND GETTING NAME
$(document).ready(function(){
    $("#player2_mobile_number_data").on('click',function(){
        var mobile_number = $("#player2_mobile_number").val();
        // alert(mobile_number)
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{mobile_number:mobile_number},
            dataType:"html",
            success:function(data) {
                // alert(data);
                if(!data) {
                    alert("This Number is Not Registered. First Register with us.")
                } else {
                    document.getElementById('player2_name_col').style.display="";
                    document.getElementById('player2_send_otp_col').style.display="";
                    document.getElementById('player2_mobile_number').disabled=true;
                    document.getElementById('player2_mobile_number_data_col').style.display="none";
                    $('#player2_name').html(data);
                }
            }
        });
    });
});


// PLAYER_2 OTP SENDER
$(document).ready(function(){
    $("#player2_send_otp").on('click',function(){
        var mobile_number = $("#player2_mobile_number").val();
        // alert(mobile_number)
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{mobile_number:mobile_number,send_otp:true},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! try after some time,due to technical isseus we are not getting you.");
                } else {
                    alert(data);
                    document.getElementById('player2_send_otp_col').style.display="none";
                    document.getElementById('player2_otp_col').style.display="";
                    document.getElementById('player2_verify_otp_col').style.display="";
                }
            }
        });
    });
});


//PLAYER_2 OTP VERIFICATION
$(document).ready(function(){
    $("#player2_verify_OTP").on('click',function(){
        var entered_OTP = $("#player2_OTP").val();
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{OTP:entered_OTP},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! Enter Valid OTP");
                } else {
                    alert(data);
                    document.getElementById('player2_otp_col').style.display="none";
                    document.getElementById('player2_verify_otp_col').style.display="none";
                    document.getElementById('player2_name').style.backgroundColor="#2cff00";
                    document.getElementById('player3').style.display="";
                }
            }
        });
    });
});


// VERIFYING PLAYER_3  MOBILE NUMBER AND GETTING NAME
$(document).ready(function(){
    $("#player3_mobile_number_data").on('click',function(){
        var mobile_number = $("#player3_mobile_number").val();
        // alert(mobile_number)
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{mobile_number:mobile_number},
            dataType:"html",
            success:function(data) {
                // alert(data);
                if(!data) {
                    alert("This Number is Not Registered. First Register with us.")
                } else {
                    document.getElementById('player3_name_col').style.display="";
                    document.getElementById('player3_send_otp_col').style.display="";
                    document.getElementById('player3_mobile_number').disabled=true;
                    document.getElementById('player3_mobile_number_data_col').style.display="none";
                    $('#player3_name').html(data);
                }
            }
        });
    });
});


// PLAYER_3 OTP SENDER
$(document).ready(function(){
    $("#player3_send_otp").on('click',function(){
        var mobile_number = $("#player3_mobile_number").val();
        // alert(mobile_number)
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{mobile_number:mobile_number,send_otp:true},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! try after some time,due to technical isseus we are not getting you.");
                } else {
                    alert(data);
                    document.getElementById('player3_send_otp_col').style.display="none";
                    document.getElementById('player3_otp_col').style.display="";
                    document.getElementById('player3_verify_otp_col').style.display="";
                }
            }
        });
    });
});


//PLAYER_3 OTP VERIFICATION
$(document).ready(function(){
    $("#player3_verify_OTP").on('click',function(){
        var entered_OTP = $("#player3_OTP").val();
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{OTP:entered_OTP},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! Enter Valid OTP");
                } else {
                    alert(data);
                    document.getElementById('player3_otp_col').style.display="none";
                    document.getElementById('player3_verify_otp_col').style.display="none";
                    document.getElementById('player3_name').style.backgroundColor="#2cff00";
                    document.getElementById('player4').style.display="";
                }
            }
        });
    });
});

// VERIFYING PLAYER_4  MOBILE NUMBER AND GETTING NAME
$(document).ready(function(){
    $("#player4_mobile_number_data").on('click',function(){
        var mobile_number = $("#player4_mobile_number").val();
        // alert(mobile_number)
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{mobile_number:mobile_number},
            dataType:"html",
            success:function(data) {
                // alert(data);
                if(!data) {
                    alert("This Number is Not Registered. First Register with us.")
                } else {
                    document.getElementById('player4_name_col').style.display="";
                    document.getElementById('player4_send_otp_col').style.display="";
                    document.getElementById('player4_mobile_number').disabled=true;
                    document.getElementById('player4_mobile_number_data_col').style.display="none";
                    $('#player4_name').html(data);
                }
            }
        });
    });
});


// PLAYER_4 OTP SENDER
$(document).ready(function(){
    $("#player4_send_otp").on('click',function(){
        var mobile_number = $("#player4_mobile_number").val();
        // alert(mobile_number)
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{mobile_number:mobile_number,send_otp:true},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! try after some time,due to technical isseus we are not getting you.");
                } else {
                    alert(data);
                    document.getElementById('player4_send_otp_col').style.display="none";
                    document.getElementById('player4_otp_col').style.display="";
                    document.getElementById('player4_verify_otp_col').style.display="";
                }
            }
        });
    });
});


//PLAYER_4 OTP VERIFICATION
$(document).ready(function(){
    $("#player4_verify_OTP").on('click',function(){
        var entered_OTP = $("#player4_OTP").val();
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{OTP:entered_OTP},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! Enter Valid OTP");
                } else {
                    alert(data);
                    document.getElementById('player4_otp_col').style.display="none";
                    document.getElementById('player4_verify_otp_col').style.display="none";
                    document.getElementById('player4_name').style.backgroundColor="#2cff00";
                    document.getElementById('player5').style.display="";
                }
            }
        });
    });
});


// VERIFYING PLAYER_5 MOBILE NUMBER AND GETTING NAME
$(document).ready(function(){
    $("#player5_mobile_number_data").on('click',function(){
        var mobile_number = $("#player5_mobile_number").val();
        // alert(mobile_number)
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{mobile_number:mobile_number},
            dataType:"html",
            success:function(data) {
                // alert(data);
                if(!data) {
                    alert("This Number is Not Registered. First Register with us.")
                } else {
                    document.getElementById('player5_name_col').style.display="";
                    document.getElementById('player5_send_otp_col').style.display="";
                    document.getElementById('player5_mobile_number').disabled=true;
                    document.getElementById('player5_mobile_number_data_col').style.display="none";
                    $('#player5_name').html(data);
                }
            }
        });
    });
});


// PLAYER_5 OTP SENDER
$(document).ready(function(){
    $("#player5_send_otp").on('click',function(){
        var mobile_number = $("#player5_mobile_number").val();
        // alert(mobile_number)
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{mobile_number:mobile_number,send_otp:true},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! try after some time,due to technical isseus we are not getting you.");
                } else {
                    alert(data);
                    document.getElementById('player5_send_otp_col').style.display="none";
                    document.getElementById('player5_otp_col').style.display="";
                    document.getElementById('player5_verify_otp_col').style.display="";
                }
            }
        });
    });
});


//PLAYER_5 OTP VERIFICATION
$(document).ready(function(){
    $("#player5_verify_OTP").on('click',function(){
        var entered_OTP = $("#player5_OTP").val();
        $.ajax({
            method:"POST",
            url:"signup_function.php",
            data:{OTP:entered_OTP},
            dataType:"html",
            success:function(data) {
                if(!data) {
                    alert("Please ! Enter Valid OTP");
                } else {
                    alert(data);
                    document.getElementById('player5_otp_col').style.display="none";
                    document.getElementById('player5_verify_otp_col').style.display="none";
                    document.getElementById('player5_name').style.backgroundColor="#2cff00";
                    // document.getElementById('player6').style.display="";
                    document.getElementById('submit').disabled=false;
                    $("#submit").html("SUBMIT");
                }
            }
        });
    });
});