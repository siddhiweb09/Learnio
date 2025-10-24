<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PreSkool - Modern Navigation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #506EE4;
            --primary-light: #EAEFFD;
            --primary-dark: #2A45A3;
            --secondary: #6c757d;
            --success: #10B981;
            --warning: #F59E0B;
            --danger: #EF4444;
            --light: #f8f9fa;
            --dark: #343a40;
            --gray: #6B7280;
            --gray-light: #E5E7EB;
            --sidebar-width: 260px;
            --sidebar-collapsed: 70px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fb;
            color: #333;
            overflow-x: hidden;
        }
        
        /* Sidebar Styles */
        .sidebar {
            background: linear-gradient(180deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            height: 100vh;
            width: var(--sidebar-width);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }
        
        .sidebar.collapsed {
            width: var(--sidebar-collapsed);
        }
        
        .sidebar-header {
            padding: 20px 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .logo {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .logo-icon {
            font-size: 1.8rem;
            margin-right: 10px;
        }
        
        .logo-text {
            transition: opacity 0.3s;
        }
        
        .sidebar.collapsed .logo-text {
            opacity: 0;
            width: 0;
        }
        
        .toggle-btn {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
            border-radius: 8px;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .toggle-btn:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        
        .sidebar-menu {
            padding: 15px 0;
        }
        
        .menu-item {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s;
            position: relative;
            margin: 5px 10px;
            border-radius: 8px;
        }
        
        .menu-item:hover, .menu-item.active {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .menu-item.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: white;
            border-radius: 0 4px 4px 0;
        }
        
        .menu-icon {
            font-size: 1.2rem;
            width: 24px;
            text-align: center;
            margin-right: 12px;
        }
        
        .menu-text {
            transition: opacity 0.3s;
            white-space: nowrap;
        }
        
        .sidebar.collapsed .menu-text {
            opacity: 0;
            width: 0;
        }
        
        .menu-badge {
            background: var(--warning);
            color: white;
            border-radius: 10px;
            padding: 2px 8px;
            font-size: 0.7rem;
            margin-left: auto;
        }
        
        .sidebar-footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .user-info {
            display: flex;
            align-items: center;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .user-details {
            transition: opacity 0.3s;
        }
        
        .sidebar.collapsed .user-details {
            opacity: 0;
            width: 0;
        }
        
        .user-name {
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        .user-role {
            font-size: 0.8rem;
            opacity: 0.7;
        }
        
        /* Top Bar Styles */
        .top-bar {
            background: white;
            height: 70px;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: fixed;
            top: 0;
            left: var(--sidebar-width);
            right: 0;
            z-index: 999;
            transition: all 0.3s ease;
        }
        
        .sidebar.collapsed ~ .top-bar {
            left: var(--sidebar-collapsed);
        }
        
        .search-container {
            position: relative;
            width: 300px;
        }
        
        .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
        }
        
        .search-input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            border: 1px solid var(--gray-light);
            border-radius: 8px;
            background: var(--light);
            transition: all 0.3s;
        }
        
        .search-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(80, 110, 228, 0.1);
        }
        
        .top-bar-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .action-btn {
            background: none;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray);
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
        }
        
        .action-btn:hover {
            background: var(--primary-light);
            color: var(--primary);
        }
        
        .notification-badge {
            position: absolute;
            top: 5px;
            right: 5px;
            background: var(--danger);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .user-menu {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .user-menu:hover {
            background: var(--primary-light);
        }
        
        .user-avatar-small {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }
        
        .user-info-small .user-name {
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        .user-info-small .user-role {
            font-size: 0.8rem;
            color: var(--gray);
        }
        
        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            margin-top: 70px;
            padding: 20px;
            transition: all 0.3s ease;
            min-height: calc(100vh - 70px);
        }
        
        .sidebar.collapsed ~ .main-content {
            margin-left: var(--sidebar-collapsed);
        }
        
        .content-header {
            margin-bottom: 20px;
        }
        
        .content-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 5px;
        }
        
        .breadcrumb {
            background: none;
            padding: 0;
            margin: 0;
            font-size: 0.9rem;
            color: var(--gray);
        }
        
        .breadcrumb-item.active {
            color: var(--primary);
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            transition: transform 0.3s;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 15px;
        }
        
        .stat-students .stat-icon {
            background: rgba(80, 110, 228, 0.1);
            color: var(--primary);
        }
        
        .stat-teachers .stat-icon {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success);
        }
        
        .stat-parents .stat-icon {
            background: rgba(245, 158, 11, 0.1);
            color: var(--warning);
        }
        
        .stat-guardians .stat-icon {
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger);
        }
        
        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 0.9rem;
            color: var(--gray);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.mobile-open {
                transform: translateX(0);
            }
            
            .top-bar, .main-content {
                left: 0;
                margin-left: 0;
            }
            
            .mobile-menu-btn {
                display: block !important;
            }
        }
        
        .mobile-menu-btn {
            display: block;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--gray);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <i class="fas fa-graduation-cap logo-icon"></i>
                <span class="logo-text">PreSkool</span>
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
    <div class="main-content">
        <div class="content-header">
            <h1 class="content-title">Admin Dashboard</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Admin Dashboard</li>
                </ol>
            </nav>
        </div>
        
        <div class="stats-grid">
            <div class="stat-card stat-students">
                <div class="stat-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div>
                    <div class="stat-value">3,640</div>
                    <div class="stat-label">Active Students</div>
                </div>
            </div>
            
            <div class="stat-card stat-teachers">
                <div class="stat-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div>
                    <div class="stat-value">234</div>
                    <div class="stat-label">Active Teachers</div>
                </div>
            </div>
            
            <div class="stat-card stat-parents">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div>
                    <div class="stat-value">161</div>
                    <div class="stat-label">Active Parents</div>
                </div>
            </div>
            
            <div class="stat-card stat-guardians">
                <div class="stat-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div>
                    <div class="stat-value">81</div>
                    <div class="stat-label">Active Guardians</div>
                </div>
            </div>
        </div>
        
        <div class="alert alert-primary" role="alert">
            <i class="fas fa-info-circle me-2"></i>
            Welcome back, Mr. Herald! Have a productive day at work.
        </div>
        
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Quick Actions</h5>
                <div class="row mt-3">
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-primary w-100 py-3">
                            <i class="fas fa-user-plus me-2"></i> Add Student
                        </button>
                    </div>
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-success w-100 py-3">
                            <i class="fas fa-chalkboard-teacher me-2"></i> Add Teacher
                        </button>
                    </div>
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-warning w-100 py-3">
                            <i class="fas fa-calendar-plus me-2"></i> Create Schedule
                        </button>
                    </div>
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-info w-100 py-3">
                            <i class="fas fa-file-invoice me-2"></i> Generate Report
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Toggle sidebar collapse/expand
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
            
            // Rotate the toggle icon
            const icon = this.querySelector('i');
            if (sidebar.classList.contains('collapsed')) {
                icon.classList.remove('fa-chevron-left');
                icon.classList.add('fa-chevron-right');
            } else {
                icon.classList.remove('fa-chevron-right');
                icon.classList.add('fa-chevron-left');
            }
        });
        
        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('mobile-open');
        });
        
        // Close mobile menu when clicking on a menu item
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    document.getElementById('sidebar').classList.remove('mobile-open');
                }
            });
        });
    </script>
</body>
</html>