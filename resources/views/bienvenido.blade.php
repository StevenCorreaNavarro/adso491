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
    <div class="box ">
        <div class="container-fluid ">
            <center>
                <h1 style="font-size:80px">Bienvenidos</h1>
                <table class="table">
                    <a href="{{ route('module.listar') }}" class="btn btn-primary " style="backgrand-color:red;">Ver
                        Modulo</a>
                    <br>
                    <br>
                    <a href="{{ route('package.listar') }}" class="btn btn-primary "
                        style="backgrand-color:red;">Ver Camioneros</a>
                    <br>
                    <br>
                    {{-- <a href="{{ route('role_user.asociar') }}" class="btn btn-primary " style="backgrand-color:red;">Ver Roles</a> --}}
            </center>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
