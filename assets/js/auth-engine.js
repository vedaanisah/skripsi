$(document).ready(function(){
    console.log("auth-engine: initialize!");

    var _form_login = $('.form-login');
    $(function(){
        if(_form_login.length != ''){
            _form_login.find('.btn-login-submit')
                .on('click', function(){
                    var _url = _form_login.data('target-url');
                    $.ajax({
                        url: _url,
                        type: 'POST',
                        data: {
                            'username': _form_login.find('.username').val(),
                            'password': _form_login.find('.password').val()
                        },
                        dataType: 'json'
                    })
                    .done(function(response){
                        console.log(response);
                    })
                    .fail(function(){
                        console.log('error');
                    });
                });
        }
    });
});