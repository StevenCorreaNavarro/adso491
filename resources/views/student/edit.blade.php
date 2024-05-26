<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Title</title>
</head>

<body>
    <div class="box-2">
        <div class="container">
            <center>
                <h1>Actualizar alumno</h1>

                <form action="{{ route('student.update', $dato) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf {{--  token o seguridad --}}
                    <label class="form-label">
                        Expediente
                        <br>
                        <input class="form-control" type="text" name="expediente"
                            value="{{ old('expediente', $dato->expediente) }}" required>
                    </label>
                    <br>
                    <label class="form-label">
                        Nombre
                        <br>
                        <input class="form-control" type="text" name="nombre_estudiante"
                            value="{{ old('nombre_estudiante', $dato->nombre_estudiante) }}" required>
                    </label>
                    <br>
                    <label class="form-label">
                        Apellido
                        <br>
                        <input class="form-control" type="text" name="apellido"
                            value="{{ old('apellido', $dato->apellido) }}" required>
                    </label>
                    <br>
                    <br>
                    
                    <button class="btn btn-primary" type="submit">Enviar Formulario:</button>
                </form>
                <br><br>
            </center>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

</body>

</html>
