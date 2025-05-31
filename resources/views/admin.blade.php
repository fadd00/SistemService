<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Welcome Admin</h1>
        <p class="text-center">Manage your items efficiently.</p>
        <div class="text-center">
            <a href="{{ url('/items') }}" class="btn btn-primary">Go to Items Page</a>
        </div>
    </div>
</body>
</html>