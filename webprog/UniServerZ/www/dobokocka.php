<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.3 CDN betöltése -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Dobókocka</title>
  </head>
  <body class="bg-dark text-white d-flex justify-content-center align-items-center vh-100">
    <main>
        <div class="card bg-black text-white shadow-lg p-4 border 0" style="max-width: 400px">
            <h1>Dobókocka</h1>
            <p>A dobáshoz kattints a gombra!</p>
            <form method="post">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary fw-bold mb">Dobás!</button>
                </div>
                <?php
                if ($_SERVER)
                ?>
    </main>
  <footer>
    </footer>
    <!-- Bootstrap JS (bundle tartalmazza a szükséges komponenseket) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>