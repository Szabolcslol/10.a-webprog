<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.3 CDN betöltése -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>BMI kalkulátor</title>
  </head>
  <body class="bg-dark text-white d-flex justify-content-center align-items-center vh-100">
    <header>

    </header>
    <main>
        <div class="card bg-black text-white shadow-lg p-4 border-0" style="max-width: 400px; width: 100%">
            <h1 class="text-center mb-3">BMI kalkulátor</h1>
            <p class="text-center">Add meg a magasságod centiméterben és a testsúlyod kilogrammban!</p>
            <form method="POST" class="d-flex flex-column">
                <div class="mb-3">
                  <label for="weight" class="form-label">Testsúly (kg)</label>
                  <input type="number" step="0.1" class="form-control bg-dark text-white border-secondary" id="weight" name="weight" required>
                </div>
                <div class="mb-3">
                  <label for="height" class="form-label">Testmagasság (cm)</label>
                  <input type="number" step="0.1" class="form-control bg-dark text-white border-secondary" id="height" name="height" required>
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" name="action" value="add" class="btn btn-primary fw-bold">Számítás</button>
                </div>
            </form>

            <!-- Ez lesz itt a PHP kód -->
             <?php
                
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                    $weight = isset($_POST['weight']) ? (float)$_POST['weight'] : 0;
                    $heightCm = isset($_POST['height']) ? (float)$_POST['height'] : 0;
                    
                    if ($heightCm > 0) {
                        $heightM = $heightCm / 100;
                        $bmi = $weight / ($heightM * $heightM);
                        $bmi = round($bmi, 1);

                        if ($bmi < 18.5) {
                            $category = "Sovány";
                            $image = "sovany.png";
                        } elseif ($bmi < 24.9) {
                            $category = "Normál testsúly";
                            $image = "normal.png";
                        } elseif ($bmi < 29.9) {
                            $category = "Túlsúlyos";
                            $image = "tulsulyos.png";
                        } else  {
                            $category = "Elhízott";
                            $image = "elhizott.png";
                        }

                        echo "<div class='alert alert-primary mt-4 text-center'>A BMI értéked: <strong>$bmi</strong><br>Kategória:<strong>$category</strong></div>";
                        echo "<div class='text-center mt-3'><img src='images/$image' alt='$category' class='img-fluid rounded shadow' style='max-height: 200px;'></div>";

                    } else {
                        echo "<div class='alert alert-danger mt-4 text-center'>Hibás adat!</div>";
                    }
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