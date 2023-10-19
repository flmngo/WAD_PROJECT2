<?php
    //buatkan dua input area yang diisi
    //input pertama berupa angka
    // input kedua berupa dropdown
    //buatkan 1 button yang bernma hitung
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <form action="latihan3.php" method="get"> 
  <div class="mb-3">
    <label for="angkaPertama" class="form-label">Input angka</label>
    <input type="number" name="angkaPertama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <select class="form-select" name="angkaKedua" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    </div>
    <input type="submit" class="btn btn-primary" value="hitung">
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>