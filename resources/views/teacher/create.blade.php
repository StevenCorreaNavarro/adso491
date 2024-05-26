<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
<title>Registrar Profesor</title>
</head>
<body>
    <div class="box-2">
        <div class="container">
            <center>
                <br><br>
                <h1>Registrar Profesor</h1>
                <br>
                <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf    {{--  token o seguridad --}}
                    <label  class="form-label">
                        Dni:
                        <br>
                        <input class="form-control" type="text" name="dni"  class="form-control" required>
                    </label>
                    <br>
                    <label  class="form-label">
                        Nombre:
                        <br>
                        <input class="form-control"  type="text" name="nombre_profesor" required>
                    </label>
                    <br>
                    <label  class="form-label">
                        Direccion:
                        <br>
                        <input class="form-control"  type="text" name="direccion" required>
                    </label>
                    <br>
                    <label  class="form-label">
                        Telefono:
                        <br>
                        <input class="form-control"  type="text" name="telefono" required>
                    </label>
                    <br>
                    <br>
                    <button class="btn btn-primary" type="submit" >Enviar Formulario:</button>
                </form>
            </center>
            <br><br><br>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>