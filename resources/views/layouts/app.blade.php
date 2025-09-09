<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        .content-wrapper {
            min-height: calc(100vh - 120px);
            padding-top: 80px;
            padding-bottom: 40px;
        }
        
        .card-custom {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: none;
        }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); box-shadow: 0 2px 20px rgba(0,0,0,0.1);">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center text-dark" href="{{ route('home') }}">
                <div class="me-2" style="width: 40px; height: 40px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-graduation-cap text-white"></i>
                </div>
                Student App
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }} px-3" 
                           href="{{ route('home') }}" style="color: {{ request()->routeIs('home') ? '#2563eb' : '#374151' }} !important;">
                            <i class="fas fa-home me-2"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('students.*') ? 'active fw-bold' : '' }} px-3" 
                           href="{{ route('students.index') }}" style="color: {{ request()->routeIs('students.*') ? '#2563eb' : '#374151' }} !important;">
                            <i class="fas fa-users me-2"></i>Students
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active fw-bold' : '' }} px-3" 
                           href="{{ route('about') }}" style="color: {{ request()->routeIs('about') ? '#2563eb' : '#374151' }} !important;">
                            <i class="fas fa-info-circle me-2"></i>About
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content-wrapper">
        @yield('content')
    </div>

    <!-- Footer -->
<footer class="bg-dark text-white py-3 mt-auto fixed-bottom">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        <div class="d-flex align-items-center mb-2 mb-md-0">
            <i class="fas fa-graduation-cap me-2"></i>
            <span><strong>Student App</strong> - Sistem Manajemen Data Siswa</span>
        </div>
        <div class="text-md-end small">
            <span>&copy; {{ date('Y') }} Student App</span> |
            <span class="light-text">Dibuat dengan Laravel & Bootstrap</span>
        </div>
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>