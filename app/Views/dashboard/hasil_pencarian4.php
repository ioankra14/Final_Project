<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <title>Hasil Pencarian Pengembali</title>
  </head>
  
  <body>
    <div class="container">
    <br>
    <h3>Hasil Pencarian Pengembali</h3>
    <hr>
 
    <table class="table">
    <thead>
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>ISBN</th>
        <th>Judul Buku</th>
    </tr>
    </thead>
    <?php
    if(count($data)>0) {
        foreach ($data as $user) {
            echo "<tr>";
            echo "<td>" . $user['nim'] . "</td>";
            echo "<td>" . $user['nama'] . "</td>";
            echo "<td>" . $user['isbn'] . "</td>";
            echo "<td>" . $user['judul_buku'] . "</td>";
        }
    }
    else {
        echo "Data tidak ditemukan";
    }
    ?>
    
    </table>

    <a href="<?= base_url('/pengembalian/index'); ?>" class="btn btn-primary">Kembali</a>
 
    </div>
  </body>
</html>