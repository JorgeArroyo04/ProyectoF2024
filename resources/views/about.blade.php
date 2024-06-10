<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - Veterinaria Hogar Animal</title>
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
            background: url('https://th.bing.com/th/id/OIG2.P01zN3qaOF2jpUhWOtHN?w=1024&h=1024&rs=1&pid=ImgDetMain') no-repeat center center;
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
        .content-section {
            padding: 30px;
        }
        .team-member {
            margin-bottom: 20px;
        }
        .team-member img {
            border-radius: 50%;
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
        <h1>Sobre Nosotros</h1>
    </div>

    <!-- Content Section -->
    <div class="container content-section">
        <!-- Introducción -->
        <h2>Introducción</h2>
        <p>Bienvenidos a Veterinaria Hogar Animal, donde nos dedicamos a proporcionar el mejor cuidado y amor para sus mascotas. Nuestro equipo está comprometido a garantizar la salud y el bienestar de todos los animales que nos visitan.</p>
        
        <!-- Nuestra Historia -->
        <h2>Nuestra Historia</h2>
        <p>Veterinaria Hogar Animal fue fundada en 2005 con el objetivo de ofrecer servicios veterinarios de alta calidad. A lo largo de los años, hemos crecido y evolucionado, pero nuestra misión sigue siendo la misma: proporcionar un cuidado excepcional para sus mascotas.</p>
        
        <!-- Misión y Visión -->
        <h2>Misión y Visión</h2>
        <p><strong>Misión:</strong> Nuestra misión es ofrecer atención médica veterinaria de calidad, centrada en el bienestar de los animales y la satisfacción de sus propietarios.</p>
        <p><strong>Visión:</strong> Ser reconocidos como la clínica veterinaria líder en nuestra comunidad, conocida por nuestra excelencia en el cuidado animal y nuestro servicio al cliente.</p>
        
        <!-- Nuestro Equipo -->
        <h2>Nuestro Equipo</h2>
        <div class="row">
            <div class="col-md-4 team-member">
                <img src="https://th.bing.com/th/id/OIG4.9XUXdTkJ.YUolXnrefV3?pid=ImgGn" alt="Doctor 1" class="img-fluid">
                <h4>Dr. Juan Pérez</h4>
                <p>Especialista en Cirugía Veterinaria</p>
            </div>
            <div class="col-md-4 team-member">
                <img src="https://th.bing.com/th/id/OIG3.6Wts4GOTmpA2Yd0XWpJ2?pid=ImgGn" alt="Doctor 2" class="img-fluid">
                <h4>Dra. María López</h4>
                <p>Especialista en Medicina Interna</p>
            </div>
            <div class="col-md-4 team-member">
                <img src="https://th.bing.com/th/id/OIG2.vCQtEmJNsqCsjYMD632d?pid=ImgGn" alt="Doctor 3" class="img-fluid">
                <h4>Dr. Carlos García</h4>
                <p>Especialista en Dermatología Veterinaria</p>
            </div>
        </div>
        
        <!-- Instalaciones -->
        <h2>Instalaciones</h2>
        <p>Nuestras instalaciones están equipadas con tecnología de última generación para garantizar que su mascota reciba el mejor cuidado posible. Contamos con salas de consulta, quirófano, área de hospitalización y un laboratorio bien equipado.</p>
        
        <!-- Testimonios de Clientes -->
        <h2>Testimonios de Clientes</h2>
        <p><i>"El equipo de Veterinaria Hogar Animal ha sido increíble con nuestro perro Max. Siempre atentos y profesionales. ¡Gracias por todo!" - Ana Gómez</i></p>
        <p><i>"Llevamos a nuestra gata Luna para una cirugía y el cuidado que recibió fue excepcional. No podríamos estar más contentos con el servicio." - Luis Rodríguez</i></p>
        
        <!-- Contacto -->
        <h2>Contacto</h2>
        <p>Para más información sobre nuestros servicios, no dude en <a href="{{ route('contact') }}">contactarnos</a>. Estamos aquí para ayudarle.</p>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-4">
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
