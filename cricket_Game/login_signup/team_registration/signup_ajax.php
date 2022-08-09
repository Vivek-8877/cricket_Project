<!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script> -->

<script type="text/javascript" 
                src=
"https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js">
      </script>
        
        <script src="jquery-3.2.1.js"></script>


<script>
    function get_data() {
        var mob = jQuery('#mobile_number').val();
        jQuery.ajax({
            url:'signup_function.php',
            type:'post',
            data:'mob='+mob,
            success:function(result) {
                // alert(result);
                if(!result) {
                    alert("This Mobile Number is Not Registered with us, First Please make registration");
                } else {
                    $('#hii').html(result);
                    // document.getElementById('hii').style.display="inline";
                }
            }
        })
    }
</script>