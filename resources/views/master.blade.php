<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Multi Submit - @yield('title')</title>
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark shadow-sm">
        <a class="navbar-brand" href="">
            <i data-feather="github"></i> Multi Submit Example
        </a>
    </nav>
</header>
<main role="main">
    <div class="container">
        @yield('content')
    </div>
</main>
<script>
    feather.replace()
</script>
</body>
</html>
