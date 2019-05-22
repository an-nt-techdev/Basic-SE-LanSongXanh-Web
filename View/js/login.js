//
// Sign In
//
$( "#login-form" ).submit(function( event ) {
    event.preventDefault();
    
    var _user = $('#login-form input[name=user]').val();
    var _pass = $('#login-form input[name=password]').val();

    $.post("index.php",
        {
            user: _user,
            pass: _pass
        },
        function(data, status){

            //alert(data);

            // Not found account or Wrong password
            if (data == "0 ") 
            {
                $('#resLogin').html('Tên đăng nhập<br>hoặc mật khẩu không đúng!!');
                $('#resLogin').css('color','red');
            }
            // Correct
            else 
            {
                window.location.reload();
            }
                
    });
});

//
// Switch form
//
$("#changeFormSignUp").click(function(){
    $('#signInModal').modal('hide');
    $('#newAccountModal').modal('show');
});

$("#changeFormSignIn").click(function(){
    $('#signInModal').modal('show');
    $('#newAccountModal').modal('hide');
});

$('#form-search').submit(function(){
    var st = document.forms["form-search"]["search"].value;
    if (st === "") return false;
});

var h = $('#navbarSupportedContent').height() + 300;
var sh = $('.result-search').height();

if (sh < h) $('.result-search').css('height', h.toString());
