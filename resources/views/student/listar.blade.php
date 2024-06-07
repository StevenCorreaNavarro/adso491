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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Title</title>
</head>

<body {{--   style="padding: 10% ; " --}}>

    <div class="box">
        <div class="container">
            <center>
                <h1 style="font-size:80px">Lista alumnos</h1>
                <br>
                <a href="{{ route('student.create') }}" class="btn btn-primary " style="backgrand-color:red;">Ingresar
                    alumno</a>
                <a href="{{ route('teacher.create') }}" class="btn btn-primary " style="backgrand-color:red;">Ingresar
                    profesor</a>
                <a href="{{ route('student.listar') }}" class="btn btn-primary " style="backgrand-color:red;">Ver
                    alumnos</a>
                <a href="{{ route('teacher.listar') }}" class="btn btn-primary " style="backgrand-color:red;">Ver
                    Profesores</a>
                <a href="{{ route('module.listar') }}" class="btn btn-dark " style="backgrand-color:red;">Ver Modulo</a>
                <br>
                <br>
                <table class="table">
                    <td>
                        <h4>Id
                    </td>
                    <td>
                        <h4>Expediente
                    </td>
                    <td>
                        <h4>Nombre
                    </td>
                    <td>
                        <h4>Apellido
                    </td>
                    <td>

                    </td>
                    <td></td>
                    <td></td>
                    @foreach ($students as $dato)
                        {{-- function listar --}}
                        <tr>
                            <td>{{ $dato->id }}</td>
                            <td>{{ $dato->expediente }}</td>
                            <td>{{ $dato->nombre_estudiante }}</td>
                            <td>{{ $dato->apellido }}</td>

                            {{-- pendiete arreglar  --}}
                            <td><a class="btn btn-primary" href="{{ route('student.show', $dato->id) }}"
                                    style="text-decoration: none">Mostrar</a></td>
                            <td><a class="btn btn-primary" href="{{ route('student.edit', $dato->id) }}"
                                    style="text-decoration: none">Editar</a></td>
                            <td>
                                <form action="{{ route('student.destroy', $dato->id) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    
                                    <button type="submit" class="btn btn-primary">Eliminar</button>

                                </form>
                            </td>
                            <td>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </center>
        </div>
    </div>


    <!-- Button trigger modal -->


    <!-- Modal -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

</body>

</html>
