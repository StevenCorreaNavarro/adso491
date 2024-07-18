<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="{{ route('product.create') }}" class="btn btn-primary " style="backgrand-color:red;">Ingresar producto</a>
        
        @foreach ($datos as $dato)
        {{-- function listar --}}
        <tr>
            
            <div class="ticua">
            <td> <div><img src="/img/NEGRO.png"  ></div>{{ $dato->id }} {{ $dato->codigo }} {{ $dato->existencia }} {{ $dato->descripcion }} {{ $dato->precio }}</td>
            </div>
            {{-- <td><a class="btn btn-primary" href="{{ route('product.show', $dato->id) }}"
                    style="text-decoration: none">Mostrar</a>
            </td>
            <td><a class="btn btn-primary" href="{{ route('product.edit', $dato->id) }}"
                    style="text-decoration: none">Editar</a> 
            </td>--}}
            <br>
            {{-- <td>
                <form action="{{ route('product.destroy', $dato->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </form>
            </td> --}}
        </th>
        </tr>
    @endforeach
    </div>
    
</body>
</html>