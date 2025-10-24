<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnio - Modern Navigation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <i class="fas fa-graduation-cap logo-icon"></i>
                <span class="logo-text">Learnio</span>
            </div>
            <button class="toggle-btn" id="toggleSidebar">
                <i class="fas fa-chevron-left"></i>
            </button>
        </div>

        <div class="sidebar-menu">
            <a href="#" class="menu-item active">
                <i class="fas fa-tachometer-alt menu-icon"></i>
                <span class="menu-text">Dashboard</span>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-user-graduate menu-icon"></i>
                <span class="menu-text">Students</span>
                <span class="menu-badge">3640</span>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-users menu-icon"></i>
                <span class="menu-text">Parents</span>
                <span class="menu-badge">161</span>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-user-shield menu-icon"></i>
                <span class="menu-text">Guardians</span>
                <span class="menu-badge">81</span>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-chalkboard-teacher menu-icon"></i>
                <span class="menu-text">Teachers</span>
                <span class="menu-badge">234</span>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-calendar-alt menu-icon"></i>
                <span class="menu-text">Schedules</span>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-clipboard-check menu-icon"></i>
                <span class="menu-text">Attendance</span>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-book menu-icon"></i>
                <span class="menu-text">Courses</span>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-file-invoice-dollar menu-icon"></i>
                <span class="menu-text">Finance</span>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-cog menu-icon"></i>
                <span class="menu-text">Settings</span>
            </a>
        </div>

        <div class="sidebar-footer">
            <div class="user-info">
                <div class="user-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="user-details">
                    <div class="user-name">Mr. Herald</div>
                    <div class="user-role">Administrator</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="d-flex align-items-center">
            <button class="mobile-menu-btn me-3" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search...">
            </div>
        </div>

        <div class="top-bar-actions">
            <button class="action-btn">
                <i class="far fa-bell"></i>
                <span class="notification-badge">5</span>
            </button>
            <button class="action-btn">
                <i class="far fa-envelope"></i>
                <span class="notification-badge">3</span>
            </button>
            <button class="action-btn">
                <i class="far fa-calendar"></i>
            </button>

            <div class="user-menu">
                <div class="user-avatar-small">MH</div>
                <div class="user-info-small">
                    <div class="user-name">Mr. Herald</div>
                    <div class="user-role">Administrator</div>
                </div>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets/js/script.js') }}"> </script>
</body>

</html>