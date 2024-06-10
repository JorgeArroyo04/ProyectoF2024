<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Veterinaria Hogar Animal</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .hero {
            background: url('https://www.simbiotia.com/wp-content/uploads/diseno-de-clinicas-veterinarias.jpg');
            background-size: cover;
            height: 600px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero h1 {
            font-size: 4em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
        }
        .services {
            padding: 50px 0;
        }
        .service-item {
            padding: 20px;
            margin-bottom: 30px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Veterinaria Hogar Animal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('services') }}">Servicios <span class="sr-only">(current)</span></a>
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

    <div class="hero">
        <h1>Nuestros Servicios</h1>
    </div>

    <div class="container services">
        <div class="row">
            <div class="col-md-4">
                <div class="service-item text-center">
                    <p><img src="https://statics-cuidateplus.marca.com/cms/styles/natural/azblob/consultas-online.jpg.webp?itok=nVoapQzF" alt="Consultas" class="img-fluid"></p>
                    <button type="button" class="btn btn-custom" onclick="window.location.href='{{ route('consultas') }}'"><h3>Consultas</h3></button>
                    <p>Realizamos consultas veterinarias completas para el bienestar de tu mascota.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item text-center">
                    <p><img src="https://mx.virbac.com/files/live/sites/virbac-mx/files/mexico%20correctas/imagenes%20de%20acoma%C3%B1amiento/Es_necesario_vacunar_perros_y_gatos_1.png" alt="Vacunación" class="img-fluid"></p>
                    <button type="button" class="btn btn-custom" onclick="window.location.href='{{ route('vacunacion') }}'"><h3>Vacunación</h3></button>
                    <p>Ofrecemos servicios de vacunación para prevenir enfermedades en tus mascotas.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item text-center">
                    <p><img src="https://web.sisol.gob.pe/wp-content/uploads/2023/04/3-CIRUGIA-GENERAL.jpg" alt="Cirugías" class="img-fluid"></p>
                    <button type="button" class="btn btn-custom" onclick="window.location.href='{{ route('cirugias') }}'"><h3>Cirugías</h3></button>
                    <p>Contamos con un equipo especializado en cirugías para diversas patologías.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center py-4">
        <p>&copy; 2024 Veterinaria Hogar Animal. Todos los derechos reservados.</p>
        <div>
            <a href="#" class="mr-3"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="#" class="mr-3"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>