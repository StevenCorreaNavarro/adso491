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
    <title>Registrar Profesor</title>
</head>

<body>
    <div class="box-2">
        <div class="container">
            <center>
                <br><br>
                <h1>Registrar Producto</h1>
                <br>
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf {{--  token o seguridad --}}
                    <label class="form-label">
                        Codigo
                        <br>
                        <input class="form-control" type="text" name="codigo" class="form-control" required>
                    </label>
                    <br>
                    <label class="form-label">
                        Existencia
                        <br>
                        <input class="form-control" type="text" name="existencia" required>
                    </label>
                    <br>
                    <label class="form-label">
                        Descripcion
                        <br>
                        <input class="form-control" type="text" name="descripcion" required>
                    </label>
                    <br>
                    <label class="form-label">
                        Precio $
                        <br>
                        <input class="form-control" type="integer" name="precio" required>
                    </label>
                    <br>
                    <br>
                    <button class="btn btn-primary" type="submit">Enviar Formulario:</button>


                </form>
            </center>
            <br><br><br>
        </div>
    </div>
    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button> --}}
    {{-- <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- <div class="modal-body">
                ...
            </div> --}}
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> --}}
 



    <script src="{{ asset('css/javascript.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
