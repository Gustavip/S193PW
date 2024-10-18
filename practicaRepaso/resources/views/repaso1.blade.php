<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Convertidor</title>
    
</head>
<body>
    <div class="container mt-5">
        <h2>Convertidor MB/GB/TB</h2>
        <form action="{{ route('convertir') }}" method="POST">  <!-- Esto es para decirle al formulario donde tiene que llegar -->
            @csrf
            <div class="form-group">

                <label for="cantidad">Cantidad:</label>

                <input type="number" class="form-control" name="cantidad"  required>
            </div>
            <div class="form-group">
                <label for="conversion">Selecciona que quieres convertir:</label>

                <select class="form-control" name="conversion" id="conversion">

                    <option value="mb_to_gb">MB a GB</option>
                    <option value="gb_to_mb">GB a MB</option>
                    <option value="gb_to_tb">GB a TB</option>
                    <option value="tb_to_gb">TB a GB</option>

                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">Convertir</button>
        </form>

            <div class="mt-4 alert alert-info">
                {{ $resultado }}   <!-- esto es para que redirija el resultado  -->
            </div>
        
    </div>
  
</body>
</html>
