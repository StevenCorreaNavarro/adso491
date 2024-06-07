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

<body style="padding: 10% ;">
    <div class="box">
        <div class="container-fluid">
            <center>
                <h1>Lista paquetes:</h1>
                <a href="{{ route('package.create') }}" class="btn btn-primary " style="backgrand-color:red;">registrar
                    paquetes
                </a>
                <br>
                <br>
                <br>
                <table class="table">
                    <td>
                        <h4>id paquetes
                    </td>
                    <td>
                        <h4>codigo
                    </td>
                    <td>
                        <h4>descripcion
                    </td>
                    <td>
                        <h4>destinatario
                    </td>
                    <td>
                        <h4>Direccion
                    </td>


                    @foreach ($paquetes as $paq)
                        <tr>
                            <td>{{ $paq->id }}</td>
                            <td>{{ $paq->codigo }}</td>
                            <td>{{ $paq->descripcion }} </td>
                            <td>{{ $paq->destinatario }} </td>
                            <td>{{ $paq->direcciones }} </td>
                            <td><a href="{{ route('package.show', $paq->id) }}"
                                    style="text-decoration: none">Mostrar</a></td>
                            <td><a href="{{ route('package.edit', $paq->id) }}" style="text-decoration: none">Editar</a></td>
                            <td>
                                <form action="{{ route('package.destroy', $paq->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
            </center>

        </div>
    </div>

</body>

</html>
