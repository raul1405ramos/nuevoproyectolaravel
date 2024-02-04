<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body>
<style>
        body {
            background-color: hsl(0, 0%, 96%);
        }

        .login-container {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin: auto;
            margin-top: 160px;
            max-width: 800px;
        }

        .login-container h1 {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group label {
            color: #495057;
        }

        .btn-primary {
            background-color: green;
            border-color: green;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
     <div class="container">
        <div class="login-container">
        <form action="{{ route('cliente.update', $cliente->id) }}" method="post">
        <h1>Modificar Cliente</h1>
      
        @csrf
        @method('PUT')
        <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required>
                    </div>

                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" class="form-control" id="correo" name="correo" value="{{ $cliente->correo }}" required>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" class="form-control" id="teléfono" name="teléfono" value="{{ $cliente->teléfono }}" required>
                    </div>

                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" class="form-control" id="dirección" name="dirección" value="{{ $cliente->dirección }}" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-4">Continuar</button>
                    </div>
      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


