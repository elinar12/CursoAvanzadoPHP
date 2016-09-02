# NOTA REFENCIAS DEL CODIGO

## ***refenc login.js funcion__('user_login').value&nbsp;&nbsp;(1)***

***Codigo:&nbsp;&nbsp;   user = __('user_login').value;***

* Con la funcion llamada ***[ __ ]*** que contiene la instruccion ***[ document.getElementById(id) ]***
concantenado con la propiedad ***[.value]*** Se accede y se obtiene el valor del
elemento del formulario ***[user_login]*** y se le asigna a la variable ***[user]***.

***La instruccion enviada seria:***&nbsp;&nbsp;***document.getElementById('user_login').value***

<br />
## ***refenc login.js variable form  &nbsp;&nbsp;(2)***
***Codigo:&nbsp;&nbsp;   form = 'user=' + user + '&pass=' + pass + '&sesion=' + sesion;***

* La variable ***form*** se le asigna los valores que va necesitar ***Ajax*** para las consultas y datos requeridos para cada evento que vayamos a realizar y los devuelve. Para el codigo:&nbsp;&nbsp;***[connect.send(form);]***


***La instruccion enviada seria:***&nbsp;&nbsp;&nbsp;&nbsp;***XMLHttpRequest.send(form);***



<br />
## ***refenc login.js variable connect  &nbsp;&nbsp;(3)***
***Codigo:    connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');***

* Se Verifica si en el objeto ***[window]*** que es la ventana del navegador,
que este presente la propiedad ***[XMLHttpRequest]*** y con la ***instruccion
en AJAX es si existe [?]*** se crea la instancia ***[XMLHttpRequest]*** y se asigna a la variable ***[connect]***.

***Sino que es la instruccion [:]*** procedemos crear una instancia ***[ActiveXObject]***
con el objeto ***[Microsoft]*** que es la ventana de del navegador con la propiedad ***[XMLHTTP]***.

***El objeto XMLHttpRequest:*** Que proporciona la comunicación asíncrona entre
las aplicaciones web y los servidores subyacentes y servicios de oficina.
Con el ***objeto XMLHttpRequest***, los clientes pueden recuperar y enviar datos XML
directamente al servidor Web sin tener que recargar la página.
