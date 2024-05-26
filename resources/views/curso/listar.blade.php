<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body style="padding: 10% ;">
    <center>
    <h1>Listar Cursos:</h1>
    <a href="{{ route('curso.create') }}" class="btn btn-primary " style="backgrand-color:red;">registrar otro dato</a>
    <br>
    <br>
    <br>
    <table class="table" >
        @foreach ($cursos as $curso)
            <tr>
                <td>{{ $curso->name }}</td>
                <td>{{ $curso->descripcion }} </td>
                <td><a href="{{ route('curso.show', $curso->id) }}" style="text-decoration: none">Mostrar</a></td>
                <td><a href="{{ route('curso.edit', $curso->id) }}" style="text-decoration: none">Editar</a></td>
                <td>
                    <form action="{{ route('curso.destroy', $curso->id) }}" method="POST">
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
</body>
</html>
