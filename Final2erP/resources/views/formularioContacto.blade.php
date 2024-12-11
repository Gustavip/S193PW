<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Gestión de Productos</title>

</head>
<body>


    <div class="container">

    <h1 class="display-1 text-prmiary text-center">Gestión de Contactos </h1>

    <form>
    <div class="card font-monospace">

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="txtnombre">
                        <samll>{{ $errors->first('txtnombre') }}</small>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="text" class="form-control" name="txtcorreo">
                        <samll>{{ $errors->first('txtcorreo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                       
                        <input type="text" class="form-control" name="txttelefono">
                        <samll>{{ $errors->first('txttelefono') }}</small>
                    </div>
            </div>
            <div class="card-footer text-muted">
       

       

        
        <a href="{{ route('rutaListadoContactos') }}" class="btn btn-primary">Agregar contacto</a>
  
    </form>



</body>
</html>