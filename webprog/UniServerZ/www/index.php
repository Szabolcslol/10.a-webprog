<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.3 CDN betöltése -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Összeadás</title>
  </head>
  <body class="bg-dark text-white d-flex justify-content-center align-items-center vh-100">
    <header>

    </header>
    <main>
        <div class="card bg-black text white shadow-lg p-4 border-0" style="max-width: 400px; width: 100%">
            <h1 class="text-center mb-3">Összeadás</h1>
            <p class="text-center">Írj be két számot, megmondom az összegüket!</p>
            <form method="POST" class="d-flex flex-column">
               <div class="mb-3">
               <label for="num1" class="form-label"></label>
               <input type="number" class="form-control bg-dark text-white border-secondary" id="num1" name="num1" required>
               </div>
               <div class="mb-3">
                  <label for="num2" class="form-label">Második szám</label>
                  <input type="number" class="form-control bg-dark text-white border-secondary" id="num2" name="num2" required>
                </div>
                <button type="submit" class="btn btn-primary fw-bold">Összeadás</button>
            </form>
        </div>
    </main>
    <footer>

    </footer>
    <!-- Bootstrap JS (bundle tartalmazza a szükséges komponenseket) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>