$('.login-btn').click(function (e){
    e.preventDefault();
    let email = $('input[name="email"]').val();
    let pwd = $('input[name="pwd"]').val();
    $.ajax({
        url: 'includes/signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            email: email,
            pwd: pwd,
        },
        success (data){
            if(data.status){
                document.location.href = '/auth/profile.php';
            }else{
                $('.msg').removeClass('none').text(data.message);
            }

        }
    });
});
