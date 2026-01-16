<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Datapolis | IA para PyMEs'; ?></title>
    <meta name="description" content="<?php echo $page_description ?? 'Datapolis - Soluciones de Inteligencia Artificial diseñadas para impulsar el crecimiento de PyMEs en Chile'; ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0a1628',
                        secondary: '#1e3a5f',
                        accent: '#00d4ff',
                        accent2: '#7c3aed',
                        light: '#f1f5f9',
                        muted: '#94a3b8'
                    },
                    fontFamily: {
                        heading: ['Space Grotesk', 'sans-serif'],
                        body: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Space Grotesk', sans-serif;
        }
        .gradient-text {
            background: linear-gradient(135deg, #00d4ff 0%, #7c3aed 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #00d4ff 0%, #7c3aed 100%);
        }
        .gradient-border {
            background: linear-gradient(135deg, #00d4ff 0%, #7c3aed 100%);
        }
        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(0, 212, 255, 0.2);
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #00d4ff 0%, #7c3aed 100%);
            transition: width 0.3s ease;
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        .card-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            margin-top: 5%;
            margin-bottom: 5%;
            margin-left: 15%;
            margin-right: 15%;
        }
        .card-hover:hover {
            transform: translateY(-4px);
            border-color: #00d4ff;
        }
        .card-hover:hover .card-image {
            transform: scale(1.1);
        }
        .hamburger-line {
            transition: all 0.3s ease;
        }
        .menu-open .hamburger-line:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }
        .menu-open .hamburger-line:nth-child(2) {
            opacity: 0;
        }
        .menu-open .hamburger-line:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        .logo-class {
            max-width: 33%;
        }
        .logo-footer {
            max-width: 100%;
        }
    </style>
</head>
<body class="font-body bg-primary text-white">
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-primary/80 backdrop-blur-lg border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="index.php" class="flex items-center space-x-2">
                    <img src="images/logo.webp" alt="Logo Datpolis IA" class="logo-class">
                </a>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#" class="nav-link text-sm font-medium uppercase tracking-wider <?php echo ($current_page ?? '') === 'inicio' ? 'text-accent active' : 'text-white hover:text-accent'; ?>">
                        Inicio
                    </a>
                    <a href="#servicios" class="nav-link text-sm font-medium uppercase tracking-wider <?php echo ($current_page ?? '') === 'servicios' ? 'text-accent active' : 'text-white hover:text-accent'; ?>">
                        Servicios
                    </a>
                    <a href="#contacto" class="nav-link text-sm font-medium uppercase tracking-wider <?php echo ($current_page ?? '') === 'contacto' ? 'text-accent active' : 'text-white hover:text-accent'; ?>">
                        Contacto
                    </a>
                </nav>
                
                <!-- CTA Button 
                <div class="hidden md:block">
                    <a href="contacto.php" class="inline-flex items-center px-6 py-3 rounded-full gradient-bg font-semibold text-sm uppercase tracking-wider hover-scale">
                        <span>Agenda una Demo</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div> -->
                
                <!-- Mobile Menu Button -->
                <button id="menu-toggle" class="md:hidden flex flex-col space-y-1.5 p-2" aria-label="Toggle menu">
                    <span class="hamburger-line block w-6 h-0.5 bg-white"></span>
                    <span class="hamburger-line block w-6 h-0.5 bg-white"></span>
                    <span class="hamburger-line block w-6 h-0.5 bg-white"></span>
                </button>
            </div>
        </div>
        
        <!-- Gradient Line 
        <div class="h-0.5 gradient-border"></div> -->
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-primary/95 backdrop-blur-lg border-b border-white/5">
            <nav class="px-4 py-6 space-y-4">
                <a href="#" class="block text-lg font-medium <?php echo ($current_page ?? '') === 'inicio' ? 'text-accent' : 'text-white'; ?>">
                    Inicio
                </a>
                <a href="#servicios" class="block text-lg font-medium <?php echo ($current_page ?? '') === 'servicios' ? 'text-accent' : 'text-white'; ?>">
                    Servicios
                </a>
                <a href="contacto.php" class="block text-lg font-medium <?php echo ($current_page ?? '') === 'contacto' ? 'text-accent' : 'text-white'; ?>">
                    Contacto
                </a>
              <!--  <a href="contacto.php" class="inline-flex items-center px-6 py-3 rounded-full gradient-bg font-semibold text-sm uppercase tracking-wider mt-4">
                    Agenda una Demo
                </a> -->
            </nav>
        </div>
    </header>
    
    <script>
        // Mobile menu toggle
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('menu-open');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
