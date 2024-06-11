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
    <title>Lista de Profesores</title>
</head>

<body>
    
    <div class="box">
        <div class="container">
                 <center>
                
                <h1 style="font-size:80px">Lista de productos</h1>
                
                <br>
                {{-- <a href="{{ route('teacher.create') }}" class="btn btn-primary " style="backgrand-color:red;">Registrar
                    Profesor</a>
                <a href="{{ route('student.create') }}" class="btn btn-primary " style="backgrand-color:red;">Ingresar
                    alumno</a>
                <a href="{{ route('student.listar') }}" class="btn btn-primary " style="backgrand-color:red;">Ver
                    alumnos</a>
                <a href="{{ route('teacher.listar') }}" class="btn btn-primary " style="backgrand-color:red;">Ver
                    Profesores</a>
                <a href="{{ route('module.listar') }}" class="btn btn-dark " style="backgrand-color:red;">Ver Modulo</a> --}}
                <a href="{{ route('product.create') }}" class="btn btn-primary " style="backgrand-color:red;">Ingresar producto</a>
                
                <a href="{{ route('bienvenidos') }}" class="btn btn-secondary " style="backgrand-color:red;"><i class="bi bi-house"></i></a> 
                
            </center>
            <br>
            <table class="table">
                <td>
                    <h4>Id
                </td>
                <td>
                    <h4>codigo
                </td>
                <td>
                    <h4>existencia
                </td>
                <td>
                    <h4>descripcion
                </td>
                <td>
                    <h4>precio
                </td>
                <td></td>
                <td></td>
                <td></td>
                @foreach ($datos as $dato)
                    {{-- function listar --}}
                    <tr>
                        <td>{{ $dato->id }}</td>
                        <td>{{ $dato->codigo }}</td>
                        <td>{{ $dato->existencia }}</td>
                        <td>{{ $dato->descripcion }}</td>
                        <td>{{ $dato->precio }} </td>

                        <td><a class="btn btn-primary" href="{{ route('product.show', $dato->id) }}"
                                style="text-decoration: none">Mostrar</a>
                        </td>
                        <td><a class="btn btn-primary" href="{{ route('product.edit', $dato->id) }}"
                                style="text-decoration: none">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('product.destroy', $dato->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary">Eliminar</button>
                                

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

    <!-- Modal -->
    {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div> --}}





    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

</body>

</html>
