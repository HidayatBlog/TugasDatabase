<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>tugasku mysqli</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class=row>
       <h4>Tabel Database Kolom pelanggan</h4>
       <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>id pelanggan</th>
            <th>nama pelanggan</th>
            <th>alamat pelanggan</th>
            <th>no telp</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'Test.php';
            $sql = 'SELECT * FROM pelanggan';
            $query = mysqli_query($koneksi,$sql);
            while ($row = mysqli_fetch_array($query)){
              ?>
            <tr>
              <td><?php echo $row['id_pelanggan']?></td>
              <td><?php echo $row['nama_pelanggan']?></td>
              <td><?php echo $row['alamat_pelanggan']?></td>
              <td><?php echo $row['no_telp']?></td>
            </tr>
        </tbody>
        <?php 
        }
      ?>
    </table>
      </div>
    </div>

     <div class="container mt-5">
      <div class=row>
       <h4>Tabel Database Kolom perpustakaan</h4>
       <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>id perpustakaan</th>
            <th>nama perpustakaan</th>
            <th>kode buku</th>
            <th>jumlah buku</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'Test.php';
            $sql = 'SELECT * FROM perpustakaan';
            $query = mysqli_query($koneksi,$sql);
            while ($row = mysqli_fetch_array($query)){
              ?>
            <tr>
              <td><?php echo $row['id_perpustakaan']?></td>
              <td><?php echo $row['nama_perpustakaan']?></td>
              <td><?php echo $row['kode_buku']?></td>
              <td><?php echo $row['jumlah_buku']?></td>
            </tr>
        </tbody>
        <?php 
        }
      ?>
    </table>
      </div>
    </div>

     <div class="container mt-5">
      <div class=row>
       <h4>Tabel Database Kolom transaksi (INNER JOIN) </h4>
       <table class="table table-striped table-bordered table-responsive-lg">
        <thead>
          <tr>
            <th>id transaksi</th>
            <th>id pelanggan</th>
            <th>nama pelanggan</th>
            <th>alamat pelanggan</th>
            <th>kode buku</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'Test.php';
            $sql = 'SELECT pl.id_pelanggan, nama_pelanggan, alamat_pelanggan, id_transaksi, kode_buku
            FROM pelanggan pl
            JOIN transaksi tr USING(id_pelanggan)';
            $query = mysqli_query($koneksi,$sql);
            while ($row = mysqli_fetch_array($query)){
              ?>
            <tr>
              <td><?php echo $row['id_transaksi']?></td>
              <td><?php echo $row['id_pelanggan']?></td>
              <td><?php echo $row['nama_pelanggan']?></td>
              <td><?php echo $row['alamat_pelanggan']?></td>
              <td><?php echo $row['kode_buku']?></td>
            </tr>
        </tbody>
        <?php 
        }
      ?>
    </table>
      </div>
    </div>

     <div class="container mt-5">
      <div class=row>
       <h4>Tabel Database Kolom transaksi (LEFT JOIN) </h4>
       <table class="table table-striped table-bordered table-responsive-lg">
        <thead>
          <tr>
            <th>id transaksi</th>
            <th>id pelanggan</th>
            <th>nama pelanggan</th>
            <th>alamat pelanggan</th>
            <th>kode buku</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'Test.php';
            $sql = 'SELECT pl.id_pelanggan, nama_pelanggan, alamat_pelanggan, id_transaksi, kode_buku
            FROM pelanggan pl
            JOIN transaksi tr USING(id_pelanggan)';
            $query = mysqli_query($koneksi,$sql);
            while ($row = mysqli_fetch_array($query)){
              ?>
            <tr>
              <td><?php echo $row['id_transaksi']?></td>
              <td><?php echo $row['id_pelanggan']?></td>
              <td><?php echo $row['nama_pelanggan']?></td>
              <td><?php echo $row['alamat_pelanggan']?></td>
              <td><?php echo $row['kode_buku']?></td>
            </tr>
        </tbody>
        <?php 
        }
      ?>
    </table>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>