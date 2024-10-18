<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/js/app.js')

    <title>PracticaRepasos</title>
    
</head>
<body>
    <div class="container text-center mt-5">

        <h1> Gustavo Gudiño Rangel </h1>
        <p>Universidad politecnica de queretaro</p>
        <p>S193</p>
        <p>ING</p>

        <a href="{{ route('repaso1') }}" class="btn btn-primary mt-3">REPASO 1</a> <!-- ruta para repaso 1 -->
    </div>
   
</body>
</html>
