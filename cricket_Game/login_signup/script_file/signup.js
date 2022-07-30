var g_name=false;
var g_father_name =false;
var g_gender =false;
var g_date_of_birth =false;
var g_profile_picture=false;
var g_aadhar_card=false;
var g_state =false;
var g_district =false;
var g_city =false;
var g_pin_number =false;
var g_mobile_number =false;
var g_email = false;
var g_password =false;
var g_check_box =false;

function call(v1,v2) {
    if(v1) {
        document.getElementById(v2).className = "form-control is-valid";
    } else {
        document.getElementById(v2).className = "form-control is-invalid";
    }
    check_for_box();
}

function check_name() {
    var input_name = document.getElementById('name').value;
    var l = input_name.length;
    if(l==0) {
        g_name=false;
        // alert("Enter Your Name");
        call(g_name,'name');
        return;
    }
    var valid=true;
    for(var i=0;i<l;i++) {
        var c = input_name.charAt(i);
        if(c>='a' && c<='z' || c>='A' && c<='Z' || c==' ') {

        } else {
            valid=false;
            break;
        }
    }
    if(valid) {
        g_name=true;
    } else {
        // alert("Enter Your Name");
        g_name=false;
    }
    call(g_name,'name');
}

function set_name() {
    call(g_name,'name');
}

function check_father_name() {
    var input_name = document.getElementById('father_name').value;
    var l = input_name.length;
    if(l==0) {
        g_father_name=false;
        call(g_father_name,'father_name');
        return;
    }
    var valid=true;
    for(var i=0;i<l;i++) {
        var c = input_name.charAt(i);
        if(c>='a' && c<='z' || c>='A' && c<='Z' || c==' ') {

        } else {
            valid=false;
            break;
        }
    }
    if(valid) {
        g_father_name=true;
    } else {
        g_father_name=false;
    }
    call(g_father_name,'father_name');
}

function set_father_name() {
    call(g_name,'father_name');
}

function set_gender() {
    call(g_gender,'gender');
}


function check_gender() {
    var input_gender = document.getElementById('gender').value;
    var l = input_gender.length;
    if(l==0) {
        g_gender=false;
    } else {
        g_gender=true;
    }
    call(g_gender,'gender');
}


function set_date_of_birth() {
    call(g_gender,'date_of_birth');
}


function check_date_of_birth() {
    var input_date_of_birth = document.getElementById('date_of_birth').value;
    var l = input_date_of_birth.length;
    if(l==0) {
        g_date_of_birth=false;
    } else {
        g_date_of_birth=true;
    }
    call(g_date_of_birth,'date_of_birth');
}


function check_profile_picture(v1) {
    var file = v1.files;
    if(file.length==0) {
        g_profile_picture=false;
        return;
    }
    var valid=true;
    for(var i=0;i<file.length;i++) {
        var s = Math.round(file[i].size/1024);
        var t = file[i].type;
        // console.log(t);
        if(!(t=="image/jpeg" || t=="image/jpg" || t=="image/png") || s>=4096 || s<=20) {
            valid=false;
            break;
        }
    }
    if(valid) {
        g_profile_picture=true;
    } else {
        g_profile_picture=false;
        alert("Invalid File");
    }
}

function check_aadhar_card(v1) {
    var file = v1.files;
    if(file.length==0) {
        g_aadhar_card=false;
        return;
    }
    var valid=true;
    for(var i=0;i<file.length;i++) {
        var s = Math.round(file[i].size/1024);
        var t = file[i].type;
        // console.log(s);
        if(t!="application/pdf" || s>=4096 || s<=20) {
            valid=false;
            break;
        }
    }
    if(valid) {
        g_aadhar_card=true;
    } else {
        g_aadhar_card=false;
        alert("Invalid File");
    }
}

function set_state() {
    call(g_state,'state');
}


function check_state() {
    var input_state = document.getElementById('state').value;
    var l = input_state.length;
    if(l==0) {
        g_state=false;
    } else {
        g_state=true;
    }
    call(g_state,'state');
}


function set_district() {
    call(g_district,'district');
}


function check_district() {
    var input_district = document.getElementById('district').value;
    var l = input_district.length;
    if(l==0) {
        g_district=false;
        // alert("Enter Your Name");
        call(g_district,'district');
        return;
    }
    var valid=true;
    for(var i=0;i<l;i++) {
        var c = input_district.charAt(i);
        if(c>='a' && c<='z' || c>='A' && c<='Z' || c==' ') {

        } else {
            valid=false;
            break;
        }
    }
    if(valid) {
        g_district=true;
    } else {
        // alert("Enter Your Name");
        g_district=false;
    }
    call(g_district,'district');
}


function set_city() {
    call(g_city,'city');
}


function check_city() {
    var input_city = document.getElementById('city').value;
    var l = input_city.length;
    if(l==0) {
        g_city=false;
        // alert("Enter Your Name");
        call(g_city,'city');
        return;
    }
    var valid=true;
    for(var i=0;i<l;i++) {
        var c = input_city.charAt(i);
        if(c>='a' && c<='z' || c>='A' && c<='Z' || c==' ') {

        } else {
            valid=false;
            break;
        }
    }
    if(valid) {
        g_city=true;
    } else {
        // alert("Enter Your Name");
        g_city=false;
    }
    call(g_city,'city');
}


function set_pin_number() {
    call(g_pin_number,'pin_number');
}


function check_pin_number() {
    var input_pin_number = document.getElementById('pin_number').value;
    var l = input_pin_number.length;
    if(l!=6) {
        g_pin_number=false;
        // alert("Enter Your Name");
        call(g_pin_number,'pin_number');
        return;
    }
    var valid=true;
    for(var i=0;i<l;i++) {
        var c = input_pin_number.charAt(i);
        if(c>='0' && c<='9') {

        } else {
            valid=false;
            break;
        }
    }
    if(valid) {
        g_pin_number=true;
    } else {
        // alert("Enter Your Name");
        g_pin_number=false;
    }
    call(g_pin_number,'pin_number');
}


function set_mobile_number() {
    call(g_mobile_number,'mobile_number');
}


function check_mobile_number() {
    var input_mobile_number = document.getElementById('mobile_number').value;
    var l = input_mobile_number.length;
    if(l!=10) {
        g_mobile_number=false;
        // alert("Enter Your Name");
        call(g_mobile_number,'mobile_number');
        return;
    }
    var valid=true;
    for(var i=0;i<l;i++) {
        var c = input_mobile_number.charAt(i);
        if(c>='0' && c<='9') {

        } else {
            valid=false;
            break;
        }
    }
    if(valid) {
        g_mobile_number=true;
    } else {
        // alert("Enter Your Name");
        g_mobile_number=false;
    }
    call(g_mobile_number,'mobile_number');
}


function set_email() {
    call(g_email,'email');
}


function check_email() {
    var input_email = document.getElementById('email').value;
    var l = input_email.length;
    if(l==0) {
        g_email=false;
        // alert("Enter Your Name");
        call(g_email,'email');
        return;
    }
    var at=0;
    var dot=0;
    for(var i=0;i<l;i++) {
        var c = input_email.charAt(i);
        if(c=='@') at++;
        if(c=='.') dot++;
    }
    if(at==1 && dot!=0) {
        g_email=true;
    } else {
        // alert("Enter Your Name");
        g_email=false;
    }
    call(g_email,'email');
}


function set_password() {
    call(g_password,'password');
}


function check_password() {
    var input_password = document.getElementById('password').value;
    var l = input_password.length;
    if(l<8) {
        g_password=false;
        // alert("Enter Your Name");
        call(g_password,'password');
        return;
    }
    var up=0;
    var special=0;
    var digit=0;
    for(var i=0;i<l;i++) {
        var c = input_password.charAt(i);
        if(c>='0' && c<='9') {
            digit++;
        } else if(c>='A' && c<='Z') {
            up++;
        } else if(c>='a' && c<='z') {
            
        } else {
            special++;
        }
    }
    // console.log(special);
    if(special>0 && up>0 && digit>0) {
        g_password=true;
    } else {
        // alert("Enter Your Name");
        g_password=false;
    }
    call(g_password,'password');
}

function check_for_box() {
    if(g_name && g_father_name && g_date_of_birth && g_gender && g_city && g_state && g_district && g_profile_picture && g_mobile_number && g_email && g_aadhar_card && g_password &&  g_pin_number) {
        g_check_box=true;
    } else {
        g_check_box=false;
    }
    call_for_check_box(g_check_box,'check_box');
}

function call_for_check_box(v1,v2) {
    if(v1) {
        document.getElementById(v2).className="form-check-input is-valid";
    } else {
        document.getElementById(v2).className="form-check-input is-invalid";
    }
    remove_disabled_submit();
}

function remove_disabled_submit() {
    if(g_check_box) {
        document.getElementById('submit').disabled = false;
    } else {
        document.getElementById('submit').disabled = true;
    }
}