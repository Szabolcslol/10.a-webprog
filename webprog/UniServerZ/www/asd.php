<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.3 CDN betöltése -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Számológép</title>
  </head>
  <body class="bg-dark text-white d-flex justify-content-center align-items-center vh-100">
    <header>

    </header>
    <main>
        <div class="card bg-black text-white shadow-lg p-4 border-0" style="max-width: 400px; width: 100%">
            <h1 class="text-center mb-3">Számológép</h1>
            <p class="text-center">Írj be két számot, megmondom az összegüket!</p>
            <form method="POST" class="d-flex flex-column">
                <div class="mb-3">
                  <label for="num1" class="form-label">Első szám</label>
                  <input type="number" class="form-control bg-dark text-white border-secondary" id="num1" name="num1" required>
                </div>
                <div class="mb-3">
                  <label for="num2" class="form-label">Második szám</label>
                  <input type="number" class="form-control bg-dark text-white border-secondary" id="num2" name="num2" required>
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" name="action" value="add" class="btn btn-primary fw-bold">Összeadás</button>
                  <button type="submit" name="action" value="sub" class="btn btn-primary fw-bold">Kivonás</button>
                  <button type="submit" name="action" value="multi" class="btn btn-primary fw-bold">Szorzás</button>
                  <button type="submit" name="action" value="divi" class="btn btn-primary fw-bold">Osztás</button>
                  <button type="submit" name="action" value="even" class="btn btn-primary fw-bold">Páros vagy páratlan?</button>
                </div>
            </form>

            <!-- Ez lesz itt a PHP kód -->
             <?php
                
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                    $a = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;
                    $b = isset($_POST['num2']) ? (int)$_POST['num2'] : 0;
                    $action = $_POST['action'];

                    switch ($action) {
                      case 'add':
                        $result = $a + $b;
                        $message = "Az összeg: <strong>$result</strong>";
                        break;
                      case 'sub':
                        $result = $a - $b;
                        $message = "A különbség: <strong>$result</strong>";
                        break;  
                      case 'multi':
                        $result = $a * $b;
                        $message = "A szorzat: <strong>$result</strong>";
                        break;
                      case 'divi':
                        if ($b === 0) {
                          $message = "<strong>Hiba:</strong> Nullával nem lehet osztani.";
                        } else {
                          $result = $a / $b;
                          $message = "Az osztás eredménye: <strong>$result</strong>";
                        }
                        break;
                      case 'even':
                        $evenA = ($a % 2 === 0) ? "páros" : "páratlan";
                        $evenB = ($b % 2 === 0) ? "páros" : "páratlan";
                        $message = "Az első szám: <strong>$evenA</strong>, a második szám <strong>$evenB</strong>";
                        break;
                      default:
                        $message = "Ismeretlen művelet.";
                        break;
                    }
                   
                    echo "<div class='alert alert-primary mt-4 text-center'>$message</div>";

                }
             ?>
        </div>

    </main>
    <footer>

    </footer>
    <!-- Bootstrap JS (bundle tartalmazza a szükséges komponenseket) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>