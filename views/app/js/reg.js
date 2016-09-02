function goReg() {
  var connect, form, response, result, user, pass, email, tyc, pass_dos;
  user = __('user_reg').value;
  // NOTA DE CODIGO reg.js funcion__('user_login').value                        (1)
  pass = __('pass_reg').value;
  email = __('email_reg').value;
  pass_dos = __('pass_reg_dos').value;
  tyc = __('tyc_reg').checked ? true : false;

  if(true == tyc) {
    if(user != '' && pass != '' && pass_dos != '' && email != '') {
      if(pass == pass_dos) {
        form = 'user=' + user + '&pass=' + pass + '&email=' + email;
        // NOTA DE CODIGO reg.js variable form                                  (2)
        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        // NOTA DE CODIGO reg.js variable connect                               (3)
        connect.onreadystatechange = function() {
          // NOTA DE CODIGO reg.js variable connect.onreadystatechange          (4)
          if(connect.readyState == 4 && connect.status == 200) {
          // NOTA DE CODIGO reg.js variable connect.readyState                  (5)
            if(connect.responseText == 1) {
              // NOTA DE CODIGO reg.js variable connect.responseText            (6)
              result = '<div class="alert alert-dismissible alert-success">';
              result += '<h4>Registro completado!</h4>';
              result += '<p><strong>Estamos redireccionandote...</strong></p>';
              result += '</div>';
              __('_AJAX_REG_').innerHTML = result;
              location.reload();
              // Recarga la pagina actual
            } else {
              __('_AJAX_REG_').innerHTML = connect.responseText;
            }
          } else if(connect.readyState != 4) {
            result = '<div class="alert alert-dismissible alert-warning">';
            result += '<button type="button" class="close" data-dismiss="alert">x</button>';
            result += '<h4>Procesando...</h4>';
            result += '<p><strong>Estamos procesando tu registro...</strong></p>';
            result += '</div>';
            __('_AJAX_REG_').innerHTML = result;
          }
        }
        connect.open('POST','ajax.php?mode=reg',true);
        // NOTA DE CODIGO login.js variable connect.open                        (7)
        connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        // NOTA DE CODIGO Reg.js variable connect.setRequestHeader              (8)
        connect.send(form);
        //Se encarga de enviar los datos de la variable form al servidor
      } else {
        result = '<div class="alert alert-dismissible alert-danger">';
        result += '<button type="button" class="close" data-dismiss="alert">x</button>';
        result += '<h4>ERROR</h4>';
        result += '<p><strong>Las contraseñas no coinciden.</strong></p>';
        result += '</div>';
        __('_AJAX_REG_').innerHTML = result;
      }
    } else {
      result = '<div class="alert alert-dismissible alert-danger">';
      result += '<button type="button" class="close" data-dismiss="alert">x</button>';
      result += '<h4>ERROR</h4>';
      result += '<p><strong>Todos los campos deben estar llenos.</strong></p>';
      result += '</div>';
      __('_AJAX_REG_').innerHTML = result;
    }
  } else {
    result = '<div class="alert alert-dismissible alert-danger">';
    result += '<button type="button" class="close" data-dismiss="alert">x</button>';
    result += '<h4>ERROR</h4>';
    result += '<p><strong>Los términos y condiciones deben ser aceptados.</strong></p>';
    result += '</div>';
    __('_AJAX_REG_').innerHTML = result;
  }

}

function runScriptReg(e) {
  // NOTA DE CODIGO Reg.js Funcion runScriptReg(e)                              (9)
  if(e.keyCode == 13) {
    goReg();
  }
}
