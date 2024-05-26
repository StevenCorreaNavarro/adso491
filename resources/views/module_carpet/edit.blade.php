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
    <title>registrar modulo</title>
</head>

<body>
    <div class="box-2">
        <div class="container">
            <center>
                <br>
                <h1>Actualizar modulo</h1>
                <br>
                <form action="{{ route('module.update', $dato) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <label class="form-label">
                        Codigo
                        <br>
                        <input type="text" name="codigo" value="{{ old('codigo', $dato->codigo) }}">
                    </label>
                    <br>
                    <label class="form-label">
                        Nombre Modulo:
                        <br>
                        <input type="text" name="nombre_modulo"
                            value="{{ old('nombre_modulo', $dato->nombre_modulo) }}">
                    </label>
                    <br>
                    <label class="form-label">
                        Id profesor
                        <br>
                        <input type="text" name="id_profesor" value="{{ old('id_profesor', $dato->id_profesor) }}">
                    </label>
                    <br>
                    <label class="form-label">
                        Id alumno
                        <br>
                        <input type="text" name="id_student" value="{{ old('id_student', $dato->id_student) }}">
                    </label>
                    <br>
                    <br>
                    <button class="btn btn-primary"  type="submit">Enviar Formulario:</button>
                    <br>
                    <br><br>
                </form>
            </center>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
