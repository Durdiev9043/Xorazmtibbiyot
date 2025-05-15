<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: #fff;
            position: fixed;
            width: 250px;
            top: 0;
            left: 0;
            padding-top: 56px;
        }

        .sidebar a {
            color: #adb5bd;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .sidebar a:hover, .sidebar a.active {
            background-color: #495057;
            color: #fff;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .navbar-brand {
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            <i class="bi bi-speedometer2"></i> Admin Panel
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <span class="nav-link text-white">{{ Auth::user()->name }}</span>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-outline-light btn-sm ms-2">Chiqish</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Sidebar -->
<div class="sidebar">
    <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin') ? 'active' : '' }}">
        <i class="bi bi-house"></i> Boshqaruv paneli
    </a>
    <a href="{{ route('categories.index') }}" class="{{ request()->is('admin/categories*') ? 'active' : '' }}">
        <i class="bi bi-folder"></i> Kategoriyalar
    </a>
    <a href="{{ route('posts.index') }}" class="{{ request()->is('admin/posts*') ? 'active' : '' }}">
        <i class="bi bi-newspaper"></i> Yangiliklar
    </a>
</div>

<!-- Main content -->
<div class="content mt-5">
    @yield('content')
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
