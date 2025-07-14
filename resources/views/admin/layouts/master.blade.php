<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="/admin/property">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/property">Properties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/team-member">Team Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/company-director">Company Directors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/testimonial">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/footer">Footer Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Public Site</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 