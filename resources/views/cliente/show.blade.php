<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: hsl(0, 0%, 96%);
        }

        .container {
            margin-top: 50px;
        }

        .table th, .table td {
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Section: Design Block -->
    <div class="container mt-5">
    <h2 style ="text-align: center;"><b><u>LISTADO DE CLIENTES</b></u></h2>
    <br>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cliente as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->nombre }}</td>
                        <td>{{ $client->correo }}</td>
                        <td>{{ $client->teléfono }}</td>
                        <td>{{ $client->dirección }}</td>
                        <td>
                            <a href="{{ route('cliente.edit', $client->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('cliente.destroy', $client->id) }}" method="post" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
