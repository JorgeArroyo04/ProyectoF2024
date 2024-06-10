<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Datos - Veterinaria</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .hero {
            background: url('https://www.simbiotia.com/wp-content/uploads/diseno-de-clinicas-veterinarias.jpg') no-repeat center center;
            background-size: cover;
            height: 300px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 3em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Veterinaria Hogar Animal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Registro del Paciente</h1>
    </div>

    <!-- Form Section -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h2 class="text-center mb-4">Registrar Datos</h2>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('registro') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="medico">Médico Solicitante</label>
                            <input type="text" class="form-control" id="medico" name="medico" required>
                        </div>
                        <div class="form-group">
                            <label for="paciente">Paciente</label>
                            <input type="text" class="form-control" id="paciente" name="paciente" required>
                        </div>
                        <div class="form-group">
                            <label for="especie">Especie</label>
                            <input type="text" class="form-control" id="especie" name="especie" required>
                        </div>
                        <div class="form-group">
                            <label for="raza">Raza</label>
                            <input type="text" class="form-control" id="raza" name="raza" required>
                        </div>
                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                            <select class="form-control" id="sexo" name="sexo" required>
                                <option value="Macho">Macho</option>
                                <option value="Hembra">Hembra</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="propietario">Propietario</label>
                            <input type="text" class="form-control" id="propietario" name="propietario" required>
                        </div>
                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <input type="number" class="form-control" id="edad" name="edad" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" required>
                        </div>
                        <button type="submit" class="btn btn-custom btn-block">Registrar</button>
                        <a href="{{ route('services') }}" class="btn btn-custom btn-block">Ir a Servicios</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-4 mt-5">
        <p>&copy; 2024 Veterinaria Hogar Animal. Todos los derechos reservados.</p>
        <div>
            <a href="#" class="mr-3"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="#" class="mr-3"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
