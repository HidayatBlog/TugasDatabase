<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Rahman_311810499</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class=row>
       <h4>Tabel Database Kolom Customer</h4>
       <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>id customer</th>
            <th>nama customer</th>
            <th>alamat customer</th>
            <th>no telp</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'Koneksi.php';
            $sql = 'SELECT * FROM customer';
            $query = mysqli_query($koneksi,$sql);
            while ($row = mysqli_fetch_array($query)){
              ?>
            <tr>
              <td><?php echo $row['id_customer']?></td>
              <td><?php echo $row['nama_customer']?></td>
              <td><?php echo $row['alamat_customer']?></td>
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
       <h4>Tabel Database Kolom admin</h4>
       <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>id admin</th>
            <th>nama barang</th>
            <th>kode barang</th>
            <th>jumlah jumlah barang</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'Koneksi.php';
            $sql = 'SELECT * FROM admin';
            $query = mysqli_query($koneksi,$sql);
            while ($row = mysqli_fetch_array($query)){
              ?>
            <tr>
              <td><?php echo $row['id_admin']?></td>
              <td><?php echo $row['nama_barang']?></td>
              <td><?php echo $row['kode_barang']?></td>
              <td><?php echo $row['jumlah_barang']?></td>
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
       <h4>Tabel Database Kolom manager (INNER JOIN) </h4>
       <table class="table table-striped table-bordered table-responsive-lg">
        <thead>
          <tr>
            <th>id manager</th>
            <th>id customer</th>
            <th>nama customer</th>
            <th>alamat customer</th>
            <th>kode barang</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'Koneksi.php';
            $sql = 'SELECT pl.id_customer, nama_customer, alamat_customer, id_manager, kode_barang
            FROM customer pl
            JOIN manager tr USING(id_customer)';
            $query = mysqli_query($koneksi,$sql);
            while ($row = mysqli_fetch_array($query)){
              ?>
            <tr>
              <td><?php echo $row['id_manager']?></td>
              <td><?php echo $row['id_customer']?></td>
              <td><?php echo $row['nama_customer']?></td>
              <td><?php echo $row['alamat_customer']?></td>
              <td><?php echo $row['kode_barang']?></td>
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
       <h4>Tabel Database Kolom manager (LEFT JOIN) </h4>
       <table class="table table-striped table-bordered table-responsive-lg">
        <thead>
          <tr>
            <th>id manager</th>
            <th>id customer</th>
            <th>nama customer</th>
            <th>alamat customer</th>
            <th>kode barang</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'Koneksi.php';
            $sql = 'SELECT pl.id_customer, nama_customer, alamat_customer, id_manager, kode_barang
            FROM customer pl
            JOIN manager tr USING(id_customer)';
            $query = mysqli_query($koneksi,$sql);
            while ($row = mysqli_fetch_array($query)){
              ?>
            <tr>
              <td><?php echo $row['id_manager']?></td>
              <td><?php echo $row['id_customer']?></td>
              <td><?php echo $row['nama_customer']?></td>
              <td><?php echo $row['alamat_customer']?></td>
              <td><?php echo $row['kode_barang']?></td>
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