<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <title>Hasil Pencarian Buku</title>
  </head>
  
  <body>
    <div class="container">
    <br>
    <h3>Hasil Pencarian Buku</h3>
    <hr>
 
    <table class="table">
    <thead>
    <tr>
        <th>ISBN</th>
        <th>Judul Buku</th>
        <th>Penerbit</th>
    </tr>
    </thead>
    <?php
    if(count($data)>0) {
        foreach ($data as $user) {
            echo "<tr>";
            echo "<td>" . $user['isbn'] . "</td>";
            echo "<td>" . $user['judul_buku'] . "</td>";
            echo "<td>" . $user['penerbit'] . "</td>";
        }
    }
    else {
        echo "Data tidak ditemukan";
    }
    ?>
    
    </table>

    <a href="<?= base_url('/buku/index'); ?>" class="btn btn-primary">Kembali</a>
 
    </div>
  </body>
</html>