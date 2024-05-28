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
        <div class="px-20 mx-100">
            <center>
                <br>
                <h1 style="font-size:40px">Asociar:</h1>
                <form action="{{ route('role_user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <h1>Usuarios:</h1>
                    <select name="user_id">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->id }} - {{ $user->name }}</option>
                        @endforeach
                    </select>
                    <br>
                    <br><br>
                    <h1>Roles:</h1>
                    <select name="role_id">
                        @foreach ($roles as $rol)
                            <option class="px-20 mx-100" value="{{ $rol->id }}">{{ $rol->id }} -
                                {{ $rol->name }}</option>
                        @endforeach
                    </select>
                    <br> <br>
                    <button type="submit" class="btn btn-primary ">Enviar Formulario:</button>
                </form>
                <br><br><br>
            </center>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
