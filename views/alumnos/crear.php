<div class="card">
    <div class="card-header">
        Agregar Alumno
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="" class="form-label">Nombre:</label>
              <input required type="text"class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del Alumno">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Correo:</label>
              <input required type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del Alumno">
            </div>
            <input name="" id="" class="btn btn-success" type="submit" value="Agregar Alumno">
            <a href="?controlador=alumnos&accion=inicio"  class="btn btn-danger">Cancelar</a>
        </form>
    </div>  
</div>