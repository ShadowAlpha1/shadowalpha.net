function redirect(link){
    window.location.replace(link)
}

function logout() {
  getlang("logout", function(data){
      Swal.fire({
          title: data['LOGOUT']['TITLE'],
          text: data['LOGOUT']['DESCRIPTION'],
          showCancelButton: true,
          confirmButtonText: data['LOGOUT']['YES'],
          cancelButtonText: data['LOGOUT']['NO'],
          showLoaderOnConfirm: true,
          preConfirm: () => {
              $.ajax({
                  type: "post",
                  url: "/auth/logout",
                  dataType: "json",
                  data: {
                      session: getCookie("session")
                  },
                  success: function(result){
                      if(result.success === true){
                          Swal.fire(result.sweetalert).then((result)=> {
                            window.location.reload() 
                          })
                      }else{
                          Swal.fire(result.sweetalert).then((result)=> {
                            window.location.reload() 
                          })
                      }
                  },
                  error: function(info){}
              });
          },
          allowOutsideClick: () => !Swal.isLoading()
      })
  })
}




function getlang(format, cb) {
  $.ajax({
      type: "post",
      url: "/getlang",
      dataType: "json",
      data: {
          data: format
      },
      success: function(result){
          if(result.success){
              cb(result.data)
          }
      },
      error: function(info){}
  });
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}