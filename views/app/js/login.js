function goLogin() {
  var connect, form, response, result, user, pass, sesion;
  user = __('user_login').value;
  // NOTA DE CODIGO login.js funcion__('user_login').value                (1)
  pass = __('pass_login').value;
  sesion = __('session_login').checked ? true : false;
  form = 'user=' + user + '&pass=' + pass + '&sesion=' + sesion;
  // NOTA DE CODIGO login.js variable form                                (2)
  connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  // NOTA DE CODIGO login.js variable connect                             (3)
  connect.onreadystatechange = function() {
  // NOTA DE CODIGO login.js variable connect.onreadystatechange          (4)
    if(connect.readyState == 4 && connect.status == 200) {
    // NOTA DE CODIGO login.js variable connect.readyState                (5)
      if(connect.responseText == 1) {
      // NOTA DE CODIGO login.js variable connect.responseText            (6)
        result = '<div class="alert alert-dismissible alert-success">';
        result += '<h4>Conectado!</h4>';
        result += '<p><strong>Estamos redireccionandote...</strong></p>';
        result += '</div>';
        __('_AJAX_LOGIN_').innerHTML = result;
        location.reload();
        // Recarga la pagina actual
      } else {
        __('_AJAX_LOGIN_').innerHTML = connect.responseText;
      }
    } else if(connect.readyState != 4) {
      result = '<div class="alert alert-dismissible alert-warning">';
      result += '<button type="button" class="close" data-dismiss="alert">x</button>';
      result += '<h4>Procesando...</h4>';
      result += '<p><strong>Estamos intentando logearte....</strong></p>';
      result += '</div>';
      __('_AJAX_LOGIN_').innerHTML = result;
    }
  }
  connect.open('POST','ajax.php?mode=login',true);
  // NOTA DE CODIGO login.js variable connect.open (7)
  connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  // NOTA DE CODIGO login.js variable connect.setRequestHeader (8)
  connect.send(form);
  //Se encarga de enviar los datos de la variable form al servidor
}
// NOTA DE CODIGO login.js Funcion runScriptLogin(e) (9)
function runScriptLogin(e) {
  if(e.keyCode == 13) {
    goLogin();
  }
}
