    <main>
        <br>
        <br>
        <br>
        <h2>Basic CRUD Application</h2>
        <p>Click the buttons on datagrid toolbar to do crud actions.</p>

        <table id="dg" title="My Users" class="easyui-datagrid" style="width:700px;height:250px" url="models/select.php"
            toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true" singleSelect="true">
            <thead>
                <tr>
                    <th field="est_cedula" width="50">Cedula</th>
                    <th field="est_nombre" width="50">Nombre</th>
                    <th field="est_apellido" width="50">Apellido</th>
                    <th field="est_direccion" width="50">Direccion</th>
                    <th field="est_telefono" width="50">Teléfono</th>
                </tr>
            </thead>
        </table>
        <div id="toolbar">
            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true"
                onclick="newUser()">Nuevo Estudiante</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true"
                onclick="editUser()">Edit User</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true"
                onclick="destroyUser()">Remove User</a>
        </div>

        <div id="dlg" class="easyui-dialog" style="width:400px"
            data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
            <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
                <h3>Ingrese Estudiante</h3>
                <div style="margin-bottom:10px">
                    <input name="est_cedula" class="easyui-textbox" required="true" label="Cedula:"
                        style="width:100%">
                </div>
                <div style="margin-bottom:10px">
                    <input name="est_nombre" class="easyui-textbox" required="true" label="Nombre:" style="width:100%">
                </div>
                <div style="margin-bottom:10px">
                    <input name="est_apellido" class="easyui-textbox" required="true" label="Apellido:" style="width:100%">
                </div>
                <div style="margin-bottom:10px">
                    <input name="est_direccion" class="easyui-textbox" required="true" label="Dirección:" style="width:100%">
                </div>
                <div style="margin-bottom:10px">
                    <input name="est_telefono" class="easyui-textbox" required="true" label="Teléfono:" style="width:100%">
                </div>
            </form>
        </div>
        <div id="dlg-buttons">
            <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()"
                style="width:90px">Guardar</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel"
                onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancelar</a>
        </div>
        <br>
        <h1 style="display: flex; justify-content: center">Tabla Boostrap</h1>
        <br>
        <button style="display: block; margin-left: auto; margin-right: auto;" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#anadirUsuarioModal">Añadir Estudiante</button>
        <div class="modal fade" id="anadirUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="crearUsuarioModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="anadirUsuarioModalLabel">Añadir Estudiante</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenido del formulario para editar un usuario -->
                            <form action="./models/guardar.php" method="POST">
                                <div class="form-group">
                                    <label for="editCedula">Cedula:</label>
                                    <input type="text" class="form-control" id="est_cedula" name="est_cedula" value="">
                                </div>
                                <div class="form-group">
                                    <label for="editNombre">Nombre:</label>
                                    <input type="text" class="form-control" id="est_nombre" name="est_nombre" value="">
                                </div>
                                <div class="form-group">
                                    <label for="editApellido">Apellido:</label>
                                    <input type="text" class="form-control" id="est_apellido" name="est_apellido" value="">
                                </div>
                                <div class="form-group">
                                    <label for="editDireccion">Dirección:</label>
                                    <input type="text" class="form-control" id="est_direccion" name="est_direccion" value="">
                                </div>
                                <div class="form-group">
                                    <label for="editTelefono">Telefono:</label>
                                    <input type="text" class="form-control" id="est_telefono" name="est_telefono" value="">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Agregar Estudiante</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Cédula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include_once 'models/selectEst.php';
                    foreach ($result as $row) {
                        echo "<tr>";
                        echo "<td>".$row['est_cedula']."</td>";
                        echo "<td>".$row['est_nombre']."</td>";
                        echo "<td>".$row['est_apellido']."</td>";
                        echo "<td>".$row['est_direccion']."</td>";
                        echo "<td>".$row['est_telefono']."</td>";
                        echo '<td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarUsuarioModal'.$row['est_cedula'].'">Editar</button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUsuarioModal'.$row['est_cedula'].'">Eliminar</button>
                            </td>';
                        echo "</tr>";

                        echo '<div class="modal fade" id="editarUsuarioModal'.$row['est_cedula'].'" tabindex="-1" role="dialog" aria-labelledby="crearUsuarioModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="crearUsuarioModalLabel">Editar Usuario</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Contenido del formulario para editar un usuario -->
                                            <form action="./models/actualizar.php" method="POST">
                                                <div class="form-group">
                                                    <label for="editCedula">Cedula:</label>
                                                    <input type="text" class="form-control" id="est_cedula" name="est_cedula" value="'.$row['est_cedula'].'" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="editNombre">Nombre:</label>
                                                    <input type="text" class="form-control" id="est_nombre" name="est_nombre" value="'.$row['est_nombre'].'">
                                                    </div>
                                                <div class="form-group">
                                                    <label for="editApellido">Apellido:</label>
                                                    <input type="text" class="form-control" id="est_apellido" name="est_apellido" value="'.$row['est_apellido'].'">
                                                </div>
                                                <div class="form-group">
                                                    <label for="editDireccion">Dirección:</label>
                                                    <input type="text" class="form-control" id="est_direccion" name="est_direccion" value="'.$row['est_direccion'].'">
                                                </div>
                                                <div class="form-group">
                                                    <label for="editTelefono">Telefono:</label>
                                                    <input type="text" class="form-control" id="est_telefono" name="est_telefono" value="'.$row['est_telefono'].'">
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-primary">Editar Usuario</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        
                        echo '<div class="modal fade" id="deleteUsuarioModal'.$row['est_cedula'].'" tabindex="-1" role="dialog" aria-labelledby="crearUsuarioModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="crearUsuarioModalLabel">Eliminar Usuario</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Contenido del formulario para editar un usuario -->
                                            <form action="./models/eliminar.php" method="POST">
                                                <div class="form-group">
                                                    <label for="deleteEst">¿Estás seguro de eliminar este estudiante?</label>
                                                    <input type="hidden" class="form-control" id="est_cedula" name="est_cedula" value="'.$row['est_cedula'].'" readonly>
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-danger">Confirmar</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                ?>
                </tbody>
            </table>
        </div>
        <br>
    </main>
    <button style="display: block; margin-left: auto; margin-right: auto;"><a type="button" class="btn btn-warning" href="views/interfaces/reporte.php">Generar Reporte</a></button>
    <br>
    <button style="display: block; margin-left: auto; margin-right: auto;"><a type="button" class="btn btn-danger" href="models/cerrarSesion.php">Cerrar Sesión</a></button>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Buscar por Cedula
                    </div>
                    <div class="card-body">
                    <form action="./models/selectEstInd.php" method="POST">
                        <div class="form-group">
                        <label for="Cedula">Cedula:</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Buscar por Cedula">
                        </div>
                        <br>
                        <button style="display: block; margin-left: auto; margin-right: auto;" type="submit" class="btn btn-primary">Buscar</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <script>
        var url;
        function newUser(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','New User');
            $('#fm').form('clear');
            url = 'models/guardar.php';
            $('#dg').datagrid('reload');
        }
        function editUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit User');
                $('#fm').form('load',row);
                url = 'models/actualizar.php';
                $('#dg').datagrid('reload');
            }
        }
        function saveUser(){
            $('#fm').form('submit',{
                url: url,
                type:'POST',
                iframe: false,
                onSubmit: function(){
                    return $(this).form('validate');
                },
                success: function(result){
                    var result = eval('('+result+')');
                    if (result.errorMsg){
                        $('#dlg').dialog('close');        // close the dialog
                        $('#dg').datagrid('reload');
                    } else {
                        $('#dlg').dialog('close');        // close the dialog
                        $('#dg').datagrid('reload');    // reload the user data
                    }
                }
            });
        }
        function destroyUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('Eliminar','Estas Seguro de eliminar el usuario?',function(r){
                    if (r){
                        $.post('models/eliminar.php',{est_cedula:row.est_cedula},function(result){
                            if (result.success){
                                $('#dlg').dialog('close');        // close the dialog
                                $('#dg').datagrid('reload');    // reload the user data
                                //window.location.reload(true);
                            } else {
                                $('#dlg').dialog('close');        // close the dialog
                                $('#dg').datagrid('reload');
                            }
                        },'json');
                    }
                });
            }
        }
    </script>
</body>

</html>