<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Administrar Usuarios
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Administrar Usuarios</a></li>
      <li class="active">Tablero</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          Agregar Usuario
        </button>
      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablas">

          <thead>
            <tr>
              <th>id</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Foto</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Último login</th>
              <th>Acciones</th>
            </tr>
          </thead>

            <tbody>
              <?php

$item = null;
$valor = null;

$usuarios = ControladorUsuarios::ctrMostrarUsuario($item, $valor);

foreach ($usuarios as $key => $value){

echo '<tr>
              <td>1</td>
              <td>'.$value["nombre"].'</td>
              <td>'.$value["usuario"].'</td>';

              if($value["foto"] != ""){
                echo ' <td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';
              }else{
                echo '<td><img src="vistas/img/usuarios/default/avatar5.png" class="img-thumbnail" width="40px"></td>';
              }

              echo '<td>'.$value["perfil"].'</td>
              <td><button class="btn btn-success btn-xs">Activado</button></td>
              <td>'.$value["ultimo_login"].'</td>
              <td>

                <div class="btn-group">
                  <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario">
                  <i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"> <i class="fa fa-times"></i></button>
                </div>
              </td>
              </tr>';
}
?>
            </tbody>
        </table>
      </div>
    </div>
  </section>
</div>

<!-- MODAL AGREGAR USUARIOS -->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

                  <!-- INICIO DE FORMULARIO -->

      <form role="form" method="POST" enctype="multipart/form-data">

      <div class="modal-header" style="background:#3c8dbc; color:white">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Agregar Usuario</h4>

      </div>
      <div class="modal-body">
        <div class="box-body">

          <!-- ENTRADA NOMBRE -->

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"> <i class="fa fa-user"></i></span>

              <input type="text" class="from-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>

            </div>
          </div>
          <!-- ENTRADA USUARIO -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"> <i class="fa fa-key"></i></span>

              <input type="text" class="from-control input-lg" name="nuevoUsuario " placeholder="Ingresar Usuario" required>

            </div>
          </div>

          <!-- ENTRADA PASSWORD -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"> <i class="fa fa-lock"></i></span>

              <input type="password" class="from-control input-lg" name="nuevoPassword" placeholder="Ingresar Contraseña" required>

            </div>
          </div>
          <!-- ENTRADA ROL -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"> <i class="fa fa-users"></i></span>

              <select class="form-control input-lg" name="nuevoPerfil">
                <option value="">Seleccionar Perfil</option>
                <option value="Administrador">Administrador</option>
                <option value="Vendedor">vendedor</option>
                <option value="Cobrador">cobrador</option>

              </select>

            </div>
          </div>

          <!-- ENTRADA PARA SUBIR LA FOTO -->
          <div class="form-group">
            <div class="panel">SUBIR FOTO
              <input type="file" class="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/usuarios/default/user2-160x160.jpg" class="img-thumbnail previsualizar" width="100px">
            </div>

          </div>

        </div>
      <!-- PIE DE MODAL -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Guardar Usuario</button>
      </div>
      
      <?php 
      $crearUsuario = new ControladorUsuarios();
      $crearUsuario -> ctrCrearUsuario();

      ?>
      
      </form>

    </div>

  </div>
</div>
</div>


<!-- MODAL EDITAR USUARIOS -->
<div id="modalEditarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

                  <!-- INICIO DE FORMULARIO -->

      <form role="form" method="POST" enctype="multipart/form-data">

      <div class="modal-header" style="background:#3c8dbc; color:white">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Editar Usuario</h4>

      </div>
      <div class="modal-body">
        <div class="box-body">

          <!-- ENTRADA NOMBRE -->

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"> <i class="fa fa-user"></i></span>

              <input type="text" class="from-control input-lg" name="editarNombre" value="" required>

            </div>
          </div>
          <!-- ENTRADA USUARIO -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"> <i class="fa fa-key"></i></span>

              <input type="text" class="from-control input-lg" name="editarUsuario " value="" required>

            </div>
          </div>

          <!-- ENTRADA PASSWORD -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"> <i class="fa fa-lock"></i></span>

              <input type="password" class="from-control input-lg" name="editarPassword" placeholder="Ingrese nueva contraseña" required>

            </div>
          </div>
          <!-- ENTRADA ROL -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"> <i class="fa fa-users"></i></span>

              <select class="form-control input-lg" name="editarPerfil">
                <option value="" id="editarPerfil"></option>
                <option value="Administrador">Administrador</option>
                <option value="Vendedor">vendedor</option>
                <option value="Cobrador">cobrador</option>

              </select>

            </div>
          </div>

          <!-- ENTRADA PARA SUBIR LA FOTO -->
          <div class="form-group">
            <div class="panel">SUBIR FOTO
              <input type="file" class="nuevaFoto" name="editarFoto">

              <p class="help-block">Peso máximo de la foto 2MB</p>
              <img src="vistas/img/usuarios/default/user2-160x160.jpg" class="img-thumbnail previsualizar" width="100px">
            </div>

          </div>

        </div>
      <!-- PIE DE MODAL -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Modiciar Usuario</button>
      </div>
      
      <!-- <?php 
      $crearUsuario = new ControladorUsuarios();
      $crearUsuario -> ctrCrearUsuario();

      ?> -->
      
      </form>

    </div>

  </div>
</div>
</div>