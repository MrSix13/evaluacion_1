<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" href="?controlador=alumnos&accion=crear" role="button">Agregar Alumno</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($alumnos as $alumno){?>
                    <tr>
                        <td><?php echo $alumno->id;?></td>
                        <td><?php echo $alumno->nombre;?></td>
                        <td><?php echo $alumno->correo;?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="">
                                <a href="?controlador=alumnos&accion=editar&id=<?php echo $alumno->id;?>"  class="btn btn-info">Editar</a>
                                <a href="?controlador=alumnos&accion=borrar&id=<?php echo $alumno->id;?>"  class="btn btn-danger">Borrar</a>   
                            </div>               
                    </td>
                    </tr>
                 <?php }?>   
                
            </tbody>
        </table>
    </div>
</div>



