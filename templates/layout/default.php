<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- Include modern CSS framework and custom styles -->
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>
    
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Add Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
    <style>
        :root {
            --primary-color: #6366f1;
            --primary-dark: #4f46e5;
            --secondary-color: #ec4899;
            --dark-color: #1e293b;
            --light-color: #f8fafc;
            --gray-color: #cbd5e1;
            --sidebar-width: 280px;
            --header-height: 70px;
            --success-color: #22c55e;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
            --info-color: #3b82f6;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f1f5f9;
            color: #334155;
            line-height: 1.6;
            display: flex;
            min-height: 100vh;
        }
        
        /* Beautiful Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background: #fff;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.05);
            z-index: 100;
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
        }
        
        .sidebar-header {
            padding: 24px 24px 16px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(203, 213, 225, 0.3);
        }
        
        .sidebar-header .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--dark-color);
            text-decoration: none;
            font-weight: 700;
            font-size: 20px;
            letter-spacing: -0.5px;
        }
        
        .sidebar-header .logo span {
            color: var(--primary-color);
        }
        
        .logo-icon {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--primary-color);
            color: white;
            border-radius: 10px;
            font-size: 18px;
        }
        
        .sidebar-content {
            padding: 24px 0;
            overflow-y: auto;
            flex: 1;
        }
        
        .nav-section {
            margin-bottom: 16px;
        }
        
        .nav-section-title {
            padding: 8px 24px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #94a3b8;
            font-weight: 600;
        }
        
        .nav-item {
            display: block;
            padding: 12px 24px;
            color: #64748b;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 14px;
            border-radius: 0;
            position: relative;
            transition: all 0.3s;
        }

        .nav-item:hover {
            color: var(--primary-color);
            background-color: rgba(99, 102, 241, 0.04);
        }
        
        .nav-item i {
            font-size: 18px;
            width: 22px;
            text-align: center;
        }
        
        .nav-item.active {
            color: var(--primary-color);
            font-weight: 600;
            background-color: rgba(99, 102, 241, 0.08);
            border-right: 3px solid var(--primary-color);
        }
        
        .nav-item.active i {
            color: var(--primary-color);
        }
        
        .sidebar-footer {
            padding: 16px 24px;
            border-top: 1px solid rgba(203, 213, 225, 0.3);
            font-size: 12px;
            color: #94a3b8;
            text-align: center;
        }
        
        /* Main Content Area */
        .content-wrapper {
            margin-left: var(--sidebar-width);
            width: calc(100% - var(--sidebar-width));
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
        }
        
        /* Top Navigation */
        .top-nav {
            background: #fff;
            height: var(--header-height);
            padding: 0 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 99;
        }
        
        .page-title {
            font-weight: 600;
            font-size: 18px;
            color: var(--dark-color);
        }
        
        .top-nav-actions {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        
        .top-nav-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748b;
            background: transparent;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .top-nav-btn:hover {
            background: #f1f5f9;
            color: var(--primary-color);
        }
        
        .search-bar {
            background: #f1f5f9;
            border-radius: 8px;
            padding: 0 16px;
            height: 40px;
            display: flex;
            align-items: center;
            width: 260px;
        }
        
        .search-bar input {
            background: transparent;
            border: none;
            height: 100%;
            outline: none;
            color: #64748b;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            margin-left: 8px;
            width: 100%;
        }
        
        .main-content {
            padding: 24px;
            flex: 1;
        }
        
        .content-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            padding: 24px;
            margin-bottom: 24px;
        }
        
        /* Flash messages */
        .message {
            padding: 16px;
            margin-bottom: 20px;
            border-radius: 8px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
        }
        
        .message.success {
            background-color: rgba(34, 197, 94, 0.1);
            color: var(--success-color);
            border-left: 4px solid var(--success-color);
        }
        
        .message.error {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--danger-color);
            border-left: 4px solid var(--danger-color);
        }
        
        .message.warning {
            background-color: rgba(245, 158, 11, 0.1);
            color: var(--warning-color);
            border-left: 4px solid var(--warning-color);
        }
        
        .message.info {
            background-color: rgba(59, 130, 246, 0.1);
            color: var(--info-color);
            border-left: 4px solid var(--info-color);
        }
        
        /* Responsive design */
        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            color: #64748b;
            font-size: 24px;
            cursor: pointer;
        }
        
        @media (max-width: 990px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.open {
                transform: translateX(0);
            }
            
            .content-wrapper {
                margin-left: 0;
                width: 100%;
            }
            
            .mobile-toggle {
                display: block;
            }
            
            .search-bar {
                width: 180px;
            }
        }
        
        @media (max-width: 576px) {
            .search-bar {
                display: none;
            }
        }
        
        /* Footer */
        footer {
            background: #fff;
            padding: 16px 24px;
            font-size: 14px;
            color: #64748b;
            border-top: 1px solid #e2e8f0;
            text-align: center;
        }
        
        /* Button styling */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.3s;
            cursor: pointer;
            border: none;
        }
        
        .btn-primary {
            background: var(--primary-color);
            color: white;
        }
        
        .btn-primary:hover {
            background: var(--primary-dark);
        }
        
        /* User profile in sidebar */
        .user-profile {
            padding: 16px 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-top: 1px solid rgba(203, 213, 225, 0.3);
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: #64748b;
            font-size: 16px;
        }
        
        .user-info {
            flex: 1;
        }
        
        .user-name {
            font-weight: 600;
            font-size: 14px;
            color: var(--dark-color);
        }
        
        .user-role {
            font-size: 12px;
            color: #94a3b8;
        }
    </style>
</head>
<body>
    <!-- Beautiful Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <a href="<?= $this->Url->build('/') ?>" class="logo">
                <div class="logo-icon">
                    <i class="fas fa-layer-group"></i>
                </div>
                <div><span>Cake</span>PHP HR</div>
            </a>
        </div>
        
        <div class="sidebar-content">
            <div class="nav-section">
                <div class="nav-section-title">Main</div>
                <a href="<?= $this->Url->build('/') ?>" class="nav-item active">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </div>
            
            <div class="nav-section">
                <div class="nav-section-title">People Management</div>
                <?= $this->Html->link('<i class="fas fa-users"></i><span>' . __('Users') . '</span>', ['controller' => 'Users','action' => 'index'], ['class' => 'nav-item', 'escape' => false]) ?>
                <?= $this->Html->link('<i class="fas fa-user-tag"></i><span>' . __('Roles') . '</span>', ['controller' => 'Roles','action' => 'index'], ['class' => 'nav-item', 'escape' => false]) ?>
                <?= $this->Html->link('<i class="fas fa-building"></i><span>' . __('Departments') . '</span>', ['controller' => 'Departments','action' => 'index'], ['class' => 'nav-item', 'escape' => false]) ?>
            </div>
            
            <div class="nav-section">
                <div class="nav-section-title">Job & Recruitment</div>
                <?= $this->Html->link('<i class="fas fa-briefcase"></i><span>' . __('Jobs') . '</span>', ['controller' => 'Jobs','action' => 'index'], ['class' => 'nav-item', 'escape' => false]) ?>
                <?= $this->Html->link('<i class="fas fa-user-plus"></i><span>' . __('Recruitments') . '</span>', ['controller' => 'Recruitments','action' => 'index'], ['class' => 'nav-item', 'escape' => false]) ?>
                <?= $this->Html->link('<i class="fas fa-file-alt"></i><span>' . __('Job Applications') . '</span>', ['controller' => 'JobApplications','action' => 'index'], ['class' => 'nav-item', 'escape' => false]) ?>
            </div>
            
            <div class="nav-section">
                <div class="nav-section-title">Workforce Management</div>
                <?= $this->Html->link('<i class="fas fa-tasks"></i><span>' . __('Tasks') . '</span>', ['controller' => 'Tasks','action' => 'index'], ['class' => 'nav-item', 'escape' => false]) ?>
                <?= $this->Html->link('<i class="fas fa-calendar-alt"></i><span>' . __('Leave Requests') . '</span>', ['controller' => 'LeaveRequests','action' => 'index'], ['class' => 'nav-item', 'escape' => false]) ?>
                <?= $this->Html->link('<i class="fas fa-clock"></i><span>' . __('Attendances') . '</span>', ['controller' => 'Attendences','action' => 'index'], ['class' => 'nav-item', 'escape' => false]) ?>
            </div>
            
            <div class="nav-section">
                <div class="nav-section-title">Resources</div>
                <a href="https://book.cakephp.org/5/" target="_blank" rel="noopener" class="nav-item">
                    <i class="fas fa-book"></i>
                    <span>Documentation</span>
                </a>
                <a href="https://api.cakephp.org/" target="_blank" rel="noopener" class="nav-item">
                    <i class="fas fa-code"></i>
                    <span>API</span>
                </a>
            </div>
        </div>
        
        <div class="user-profile">
            <div class="user-avatar">
                JD
            </div>
            <div class="user-info">
                <div class="user-name">John Doe</div>
                <div class="user-role">Admin</div>
            </div>
            <button class="top-nav-btn">
                <i class="fas fa-ellipsis-v"></i>
            </button>
        </div>
    </aside>
    
    <!-- Main Content Area -->
    <div class="content-wrapper">
        <nav class="top-nav">
            <div class="left-section">
                <button class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="page-title">Dashboard</div>
            </div>
            
            <div class="top-nav-actions">
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search...">
                </div>
                
                <button class="top-nav-btn">
                    <i class="far fa-bell"></i>
                </button>
                
                <button class="top-nav-btn">
                    <i class="fas fa-cog"></i>
                </button>
            </div>
        </nav>
        
        <div class="main-content">
            <div class="content-card">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </div>
        
        <footer>
            <div>&copy; <?= date('Y') ?> Your Company HR Management System - Built with CakePHP</div>
        </footer>
    </div>
    
    <!-- Add JavaScript for enhanced interactivity -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileToggle = document.querySelector('.mobile-toggle');
            const sidebar = document.querySelector('.sidebar');
            
            if (mobileToggle) {
                mobileToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('open');
                });
            }
            
            // Set active menu item based on current URL
            const currentPath = window.location.pathname;
            const navItems = document.querySelectorAll('.nav-item');
            
            navItems.forEach(item => {
                const href = item.getAttribute('href');
                if (href && currentPath.includes(href) && href !== '/') {
                    // Remove active class from all items
                    navItems.forEach(i => i.classList.remove('active'));
                    // Add active class to current item
                    item.classList.add('active');
                } else if (href === '/' && currentPath === '/') {
                    item.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>