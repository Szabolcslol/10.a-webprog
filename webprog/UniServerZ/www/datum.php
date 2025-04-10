<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.3 CDN betöltése -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Dátum</title>
  </head>
  <body class="bg-dark text-white d-flex justify-content-center align-items-center vh-100">
    <?php
    $message="";
    $FirstDate="";
    $SecondDate="";

    if($_SERVER ['REQUEST_METHOD'] === "POST") {
      $FirstDate = $_POST("date1");
      $SecondDate  = $_POST("date2");
      if($FirstDate)([="" && $SecondDate]="") {
        $dateFirst = new DateTime $FirstDate
        $dateSecond = new DateTime $SecondDate

        
        #A diff fuggvénnyel kiszámoljuk a két dátum közötti különbséget
        #--> a napok számát
        #--> a hónapok számát
        #--> az évek számát
        
        $difference = $dateFirst


        if($difference->insert) {
          $message  
        }

      }
        
    }
    ?>

    <main>
        <div class="card bg-black text-white shadow-lg p-4 border 0" style="max-width: 400px">
            <h1>Dátumm</h1>
            <div class="d-grid gap-2">
            <form method="POST" class="d-flex flex-column">
                <div class="mb-3">
                  <label for="date1" class="form-label">Első dátum</label>
                  <input type="date" step="0.1" class="form-control bg-dark text-white border-secondary" id="date1" name="date1" required>
                </div>
                <div class="mb-3">
                  <label for="date2" class="form-label">Második dátum</label>
                  <input type="date" step="0.1" class="form-control bg-dark text-white border-secondary" id="date2" name="date2" required>
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" name="action" value="add" class="btn btn-primary fw-bold">Számítás</button>
                </div>
            </form>
            </div>
    </main>
    <footer>
    </footer>
    <!-- Bootstrap JS (bundle tartalmazza a szükséges komponenseket) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>