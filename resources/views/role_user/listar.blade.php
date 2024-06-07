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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Title</title>
</head>

<body >
    
    <div class="box" >
        <div class="container " >
            <center>
                <br>
                <h1 style="font-size:80px">Lista Usuario-Rol</h1>
                {{-- <h1 style="font-size:80px">Usuario-rol</h1> --}}
                
                <br>
                <br>
                {{-- <a href="{{ route('student.create') }}" class="btn btn-primary " style="backgrand-color:red;">Ingresar alumno</a>
                <a href="{{ route('teacher.create') }}" class="btn btn-primary " style="backgrand-color:red;">Ingresar profesor</a>
                
                <a href="{{ route('student.listar') }}" class="btn btn-primary " style="backgrand-color:red;">Ver alumnos</a>
                <a href="{{ route('teacher.listar') }}" class="btn btn-primary " style="backgrand-color:red;">Ver profesores</a> --}}
                <a href="{{ route('role_user.asociar') }}" class="btn btn-primary " style="backgrand-color:red;">asociar</a>
                <a href="{{ route('bienvenidos') }}" class="btn btn-primary " style="backgrand-color:red;"><i class="bi bi-house"></i></a> 
                
                <br>
                <br>
                <br>
                <table class="table box-3">
                    <td>
                        <h4>Id
                    </td>
                    
                    <td>
                        <h4>id_usuario
                    </td>
                    <td>
                        <h4>Id profesor
                    </td>
                    <td>
                        <h4>
                    </td>
                    
                    <td></td>
                    <td></td>
                    @foreach ($roleusers as $dato)
                        {{-- function listar --}}
                        <tr>
                            
                            <td class="box-3">{{ $dato->id }}</td>
                            {{-- <td>{{ $dato->id }}</td> --}}
                            <td>{{ $dato->role_id }}</td>
                            <td>{{ $dato->user_id}}</td>
                            {{-- <td>{{$dato->nombre_profesor}}</td> --}}
                            {{-- <td>{{ $dato->id_student }}</td> --}}
                            {{-- <td><a class="btn btn-primary" href="{{ route('module.show', $dato->id) }}" style="text-decoration: none">Mostrar</a></td> --}}
                            {{-- <td><a class="btn btn-primary" href="{{ route('module.edit', $dato->id) }}" style="text-decoration: none">Editar</a></td> --}}
                            <td>
                                {{-- <form action="{{ route('module.destroy', $dato->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary">Eliminar</button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </center>
            <br><br>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

</body>

</html>
