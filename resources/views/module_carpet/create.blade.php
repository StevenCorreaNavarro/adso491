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
            <br>
            <center>
                <h1>Asignar Modulo</h1>
                <br>
                <form action="{{ route('module.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf {{-- token o seguridad  --}}
                    <label  class="form-label">
                        Codigo
                        <br>
                        <input class="form-control" type="text" name="codigo"  class="form-control" required>
                    </label>
                    <br>
                    <label  class="form-label">
                        Nombre Modulo
                        <br>
                        <input class="form-control"  type="text" name="nombre_modulo" required>
                    </label>
                    <br>
                    <h1>Profesor:</h1>
                    <select name="id_profesor">
                        @foreach ($teacher as $user)
                            <option value="{{ $user->id }}">{{ $user->id }} - {{ $user->id_profesor }}</option>
                        @endforeach
                    </select>
                    <br>
                    <br><br>
                    <h1>alumno</h1>
                    <select name="id_student">
                        @foreach ($student as $rol)
                            <option value="{{ $rol->id }}">{{ $rol->id }} - {{ $rol->id_profesor }}</option>
                        @endforeach
                    </select>
                    <br>
                    <br>
                    <button class="btn btn-primary" type="submit" >Enviar Formulario:</button>
                    <br>
                    <br>
                    <br>
                </form>
            </center>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>