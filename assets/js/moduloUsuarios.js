$('#newUsuario').on('click', function () {
    
    var nombres = $('#nombres').val();
    var apellidos = $('#apellidos').val();    
    var usuario = $('#usuario').val();
    var password = $('#password').val();
    var email = $('#email').val();
    var rol_name = $('#roll_name').val();

    if (nombres == ""){
        alert('El nombre es obligatorio');
        return false;
    }
    if (apellidos == "") {
        alert('El apellido es obligatorio');
        return false;
    }

    if (usuario == "") {
        alert('El usuario es obligatorio');
        return false;
    }

    if (password == "") {
        alert('El password es obligatorio');
        return false;
    }

    if (email == "") {
        alert('El correo es obligatorio');
        return false;
    }
    if (rol_name == "") {
        alert('El correo es obligatorio');
        return false;
    }


    $.ajax({
        type: 'POST',
        data: "crear_usuario=1&nombres=" + nombres + "&apellidos=" + apellidos + "&usuario=" + usuario + "&password=" + password + "&email=" + email + "&roll_name=" + rol_name,
        url: '../../controller/Usuarios/usuariosController.php',
        dataType: 'json',
        success: function(data){
            cargarContenido('../view/Usuarios/usuariosView.php');
            var resultado = data.resultado;
          /*  if(resultado === 1){
                $('#formNuevoUsuario').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();

                alert('Usuario creado exitosamente');
                cargarContenido('proyectoweb/Usuarios/usuariosView.php');
            }else{
                alert('No se pudo crear el usuario');
            }*/
        }
    });

});
$('#newH').on('click', function () {
    
    var nombreh = $('#nombreh').val();
    var estado = $('#estado').val();    


    
    if (nombreh == ""){
        alert('El nombre es obligatorio');
        return false;
    }
    if (estado == "") {
        alert('El estado de la herramienta es obligatorio');
        return false;
    }


    $.ajax({
        type: 'POST',
        data: "crear_herramientas=1&nombreh=" + nombreh + "&estado=" + estado,
        url: '../../controller/Usuarios/usuariosController.php',
        dataType: 'json',
        success: function(data){
       
            var resultado = data.resultado;
          if(resultado === 1){
                $('#formNuevoUsuario').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();

                alert('Herramienta creada exitosamente');
                cargarContenido('view/ver2/herramientas.php');
            }else{
                alert('No se pudo crear el usuario');
            }
        }
    });

});

$('#nuevocliente').on('click', function () {
    
    var nombre_cliente = $('#nombre').val();
    var nit = $('#nit').val();    
    var estado = $('#estado').val();
    
    if (nombre_cliente == "") {
        alert('El nombre es obligatorio');
        return false;
    }

    if (nit >="13") {
        alert('El Nit es muy corto');
        return false;
    }

    if (estado == "") {
        alert('El estado es obligatorio: ACTIVO, INACTIVO');
        return false;
    }

    $.ajax({
        type: 'POST',
        data: "crear_cliente=1&nombre=" + nombre_cliente + "&nit=" + nit + "&estado=" + estado,
        url: '../../controller/Usuarios/usuariosController.php',
        dataType: 'json',

    });

});

$('#newP').on('click', function () {
    
    var obs = $('#obs').val();
    var fecha_inicio = $('#fecha_inicio').val();    
    var fecha_fin = $('#fecha_fin').val();
    
    if (obs == "") {
        alert('Puedes dejarnos una observación');
        return false;
    }

    if (fecha_inicio =="") {
        alert('Deja la fecha de inicio porfavor');
        return false;
    }

    if (fecha_fin == "") {
        alert('Deja la fecha de finalización porfavor');
        return false;
    }

    $.ajax({
        type: 'POST',
        data: "crear_proyecto=1&obs=" + obs + "&fecha_inicio=" + fecha_inicio + "&fecha_fin=" + fecha_fin,
        url: '../../controller/Usuarios/usuariosController.php',
        dataType: 'json',
        success: function(dato){
            var result = dato.result
            if(result == 1){
                alert('Soy un if ');
            }
        }

    });

});

$('#actualizarName').on('click', function () {
    
    var nombres = $('#nombres_upd').val();

    if (nombres == ""){
        alert('El nombre es obligatorio');
        return false;
    }

    $.ajax({
        type: 'POST',
        data: "actualizar_nombres=1&id=" + id + "&nombres=" + nombres,
        url: '../../controller/Usuarios/usuariosController.php',
        dataType: 'json',
        success: function(data){
            var resultado = data.resultado;
            if(resultado === 1){

                alert('Usuario actualizado exitosamente');
                cargarContenido('view/ver2/usuariosView.php');
            }else{
                alert('No se pudo actualizar los datos del usuario');
            }
        }
    });

});

$('#actUsuario').on('click', function () {
    
  
    var nombres = $('#nombres_upd').val();
    var apellidos = $('#apellidos_upd').val();    
    var usuario = $('#usuario_upd').val();
    var password = $('#password_upd').val();
    var email = $('#email_upd').val();
   


    
    if (nombres == ""){
        alert('El nombre es obligatorio');
        return false;
    }
    if (apellidos == "") {
        alert('El apellido es obligatorio');
        return false;
    }

    if (usuario == "") {
        alert('El usuario es obligatorio');
        return false;
    }

    if (password == "") {
        alert('El password es obligatorio');
        return false;
    }

    if (email == "") {
        alert('El correo electronico es obligatorio');
        return false;
    }



    $.ajax({
        type: 'POST',
        data: "actualizar_usuario=1&id=" + id + "&nombres=" + nombres + "&apellidos=" + apellidos + "&usuario=" + usuario + "&password=" + password + "&email=" + email,
        url: '../../controller/Usuarios/usuariosController.php',
        dataType: 'json',
        success: function(data){
            var resultado = data.resultado;
            if(resultado === 1){

                alert('Usuario actualizado exitosamente');
                cargarContenido('../..view/ver2/mainEditProf.php');
            }else{
                alert('No se pudo actualizar los datos del usuario');
            }
        }
    });

});

function obtenerUsuario(id){

    $.ajax({
        type: 'POST',
        data: "obtener_usuario=1&user_id=" + id,
        url: '../../controller/Usuarios/usuariosController.php',
        dataType: 'json',
        success: function (data) {
            var id = data.id;
            var nombres = data.nombres;
            var apellidos = data.apellidos;
            var usuario = data.user;
            var clave = data.password;
            
            $('#id_upd').val(id);
            $('#nombres_upd').val(nombres);
            $('#apellidos_upd').val(apellidos);
            $('#usuario_upd').val(user);
            $('#password_upd').val(clave);

            $('#formActualizaUsuario').modal('show');                            
        }
    });
}

function eliminarUsuario(id){
    
    $.ajax({
        type: 'POST',
        data: "eliminar_usuario=1&user_id=" + id,
        url: '../../controller/Usuarios/usuariosController.php',
        dataType: 'json',
        
        success: function (data) {
            alert('Estoy arriba del if');
            var result = data.resultado;
            
            if (resultado === 1) {                
                alert('Usuario Eliminado exitosamente');
                cargarContenido('proyectoweb/Usuarios/usuariosView.php');
            } else {
                alert('No se pudo eliminar el usuario seleccionado');
            }
        }
    });

}