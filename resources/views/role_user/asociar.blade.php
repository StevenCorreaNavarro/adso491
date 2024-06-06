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
    <title>asociar</title>
</head>

<body>
    <div class="box-2">
        <div class="container-fluid">
            <center>
                <br>
                <h1>Hola desde asociar:</h1>
                <br>
                <br>
                <form action="{{ route('role_user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <h3>Usuarios:</h3>
                    <select class="container-sm col-6" name="user_id">
                        @foreach ($users as $user)
                            <option  value="{{ $user->id }}">{{ $user->id }} - {{ $user->name }}</option>
                        @endforeach
                    </select>
                    <br>
                    <br>
                    <br>
                    <h3>Roles:</h3>
                    <select class="container-sm col-6" name="role_id">
                        @foreach ($roles as $rol)
                            <option  value="{{ $rol->id }}">{{ $rol->id }} - {{ $rol->name }}</option>
                        @endforeach
                    </select>
                    <br> <br>
                    <button class="btn btn-primary" type="submit">Enviar Formulario:</button>
                </form>
                <br>
                <br>
        </div>
    </div>
    </center>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
