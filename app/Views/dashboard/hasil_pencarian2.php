<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <title>Hasil Pencarian Anggota</title>
  </head>
  
  <body>
    <div class="container">
    <br>
    <h3>Hasil Pencarian Anggota</h3>
    <hr>
 
    <table class="table">
    <thead>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
    </tr>
    </thead>
    <?php
    if(count($data)>0) {
        foreach ($data as $user) {
            echo "<tr>";
            echo "<td>" . $user['nim'] . "</td>";
            echo "<td>" . $user['nama'] . "</td>";
            echo "<td>" . $user['jurusan'] . "</td>";
            echo "</tr>";
        }
    }
    else {
        echo "Data tidak ditemukan";
    }
    ?>
    </table>
    
    <a href="<?= base_url('/mahasiswa/index'); ?>" class="btn btn-primary">Kembali</a>
 
    </div>
  </body>
</html>