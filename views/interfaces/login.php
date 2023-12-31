<br>
<br>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Iniciar Sesión
        </div>
        <div class="card-body">
          <form action="./models/autenticar.php" method="POST">
            <div class="form-group">
              <label for="usuario">Usuario:</label>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa tu usuario">
            </div>
            <div class="form-group">
              <label for="contrasena">Contraseña:</label>
              <input type="password" class="form-control" id="clave" name="clave" placeholder="Ingresa tu contraseña">
            </div>
            <br>
            <button type="submit" class="btn btn-primary btnLogin">Iniciar Sesión</button>
            <button type="button" class="btn btn-warning btnNewUser" data-bs-toggle="modal"
              data-bs-target="#crearUsuarioModal">Nuevo Usuario</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal para crear un nuevo usuario -->
<div class="modal fade" id="crearUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="crearUsuarioModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="crearUsuarioModalLabel">Crear un nuevo usuario</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Contenido del formulario para crear un nuevo usuario -->
        <form action="./models/crearUsuario.php" method="POST">
          <div class="form-group">
            <label for="nuevoUsuario">Nuevo Usuario:</label>
            <input type="text" class="form-control" id="nuevoUsuario" name="nuevoUsuario"
              placeholder="Ingresa el nuevo usuario">
          </div>
          <div class="form-group">
            <label for="nuevaContrasena">Nueva Contraseña:</label>
            <input type="password" class="form-control" id="nuevaContrasena" name="nuevaContrasena"
              placeholder="Ingresa la nueva contraseña">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Crear Usuario</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </form>
      </div>
    </div>
  </div>
</div>