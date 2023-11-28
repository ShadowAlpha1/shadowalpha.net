function login() {
    $.ajax({
        type: "post",
        url: "/auth/login",
        dataType: "json",
        data: {
            email: $('#email1').val(),
            password: $('#password1').val()
        },
        success: function(result){
            if(result.success === true){
                Swal.fire(result.sweetalert).then((result)=> {
                    window.location.reload() 
                  })
            }else{
                Swal.fire(result.sweetalert)
            }
        }
    });
}

function register() {
    $.ajax({
        type: "post",
        url: "/auth/register",
        dataType: "json",
        data: {
            email: $('#email').val(),
            username: $('#username').val(),
            password: $('#password').val(),
            repeatPassword: $('#repeat-password').val()
        },
        success: function(result){
            if(result.success === true){
                Swal.fire(result.sweetalert).then((result)=> {
                    window.location.reload() 
                  })
            }else{
                Swal.fire(result.sweetalert)
            }
        }
    });
}

function getTempCode(type) {
    $.ajax({
        type: "post",
        url: "/auth/getTempCode",
        dataType: "json",
        data: {
            email: $('#email3').val(),
            type: type
        },
        success: function(result){
            if(result.success === true){
                Swal.fire(result.sweetalert)
                const modal1 = document.getElementById('tempCodeVerifyModal')
                const modal2 = document.getElementById('forgotpwModal')
                modal1.addEventListener('show.bs.modal', event => {})
                modal2.addEventListener('hide.bs.modal', event => {})
            }else{
                Swal.fire(result.sweetalert)
            }
        }
    });
}

function forgotpw() {
    $.ajax({
        type: "post",
        url: "/auth/forgotpw",
        dataType: "json",
        data: {
            tempcode: $('#tempcode').val(),
            newpassword: $('#newpassword').val(),
            repeatNewpassword: $('#repeatNewpassword').val()
        },
        success: function(result){
            if(result.success === true){
                Swal.fire(result.sweetalert).then((result)=> {
                    window.location.reload()
                })
            }else{
                Swal.fire(result.sweetalert)
            }
        }
    });
}