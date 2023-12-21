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
                onclick="newUser()">New User</a>
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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Cédula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
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
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>
    <script>
        var url;
        function newUser(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','New User');
            $('#fm').form('clear');
            url = 'models/guardar.php';
        }
        function editUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit User');
                $('#fm').form('load',row);
                url = 'models/update.php';
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
                        $.post('models/delete.php',{est_cedula:row.est_cedula},function(result){
                            if (result.success){
                                $('#dg').datagrid('reload');    // reload the user data
                            } else {
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