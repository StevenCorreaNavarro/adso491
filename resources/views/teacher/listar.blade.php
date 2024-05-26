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
    <title>Lista de Profesores</title>
</head>

<body>
    <div class="box">
        <div class="container">
            <center>
                <h1 style="font-size:80px">Lista profesores</h1>
                <br>
                <a href="{{ route('teacher.create') }}" class="btn btn-primary " style="backgrand-color:red;">Registrar
                    Profesor</a>
                <a href="{{ route('student.create') }}" class="btn btn-primary " style="backgrand-color:red;">Ingresar
                    alumno</a>
                <a href="{{ route('student.listar') }}" class="btn btn-primary " style="backgrand-color:red;">Ver
                    alumnos</a>
                <a href="{{ route('teacher.listar') }}" class="btn btn-primary " style="backgrand-color:red;">Ver
                    Profesores</a>
                <a href="{{ route('module.listar') }}" class="btn btn-dark " style="backgrand-color:red;">Ver Modulo</a>
            </center>
            <br>
            <table class="table">
                <td>
                    <h4>Id
                </td>
                <td>
                    <h4>DNI
                </td>
                <td>
                    <h4>Nombre
                </td>
                <td>
                    <h4>Direccion
                </td>
                <td>
                    <h4>Telefono
                </td>
                <td></td>
                <td></td>
                <td></td>
                @foreach ($teachers as $dato)
                    {{-- function listar --}}
                    <tr>
                        <td>{{ $dato->id }}</td>
                        <td>{{ $dato->dni }}</td>
                        <td>{{ $dato->nombre_profesor }}</td>
                        <td>{{ $dato->direccion }}</td>
                        <td>{{ $dato->telefono }} </td>

                        <td><a class="btn btn-primary" href="{{ route('teacher.show', $dato->id) }}"
                                style="text-decoration: none">Mostrar</a>
                        </td>
                        <td><a class="btn btn-primary" href="{{ route('teacher.edit', $dato->id) }}"
                                style="text-decoration: none">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('teacher.destroy', $dato->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <br>
            <br>
        </div>
    </div>
    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button> --}}





    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

</body>

</html>
