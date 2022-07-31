function show_hide() {
    var v1 = document.getElementById('pass');
    if(v1.type=="password") {
        v1.type="text";
    } else {
        v1.type="password";
    }
}