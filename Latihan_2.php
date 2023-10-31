<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container">
      <h1>Toko Wayang Kami</h1>
      <p>Program Aplikasi sederhana untuk menghitung penjualan barang toko wayang kami</p>
      <br>
      <form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name = "namabarang">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga Barang</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "hargabarang">
  </div>    
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jumlah Barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name = "jumlahbarang">
   
  </div>
  <button type="submit" class="btn btn-primary" name = "Hitung">Hitung</button>
</form>
  </div>

  <hr>
  <?php
    if(isset($_POST["Hitung"])) {
        $namabarang = $_POST["namabarang"];
        $harga = $_POST["hargabarang"];
        $jumlah = $_POST["jumlahbarang"];

        $hasil = $harga * $jumlah;
        $diskon = $hasil * 0.05;
        $TotalSetelahDiskon = $hasil - $diskon ;

        echo "<div class= 'container'>" ;
        echo "<h1> Jumlah yang harus dibayarkan</h1>";
        echo "<p> nama barang $namabarang </p>";
        echo "<p> harga barang $harga </p>"; 
        echo "<p> jumlah barang $jumlah  </p>";
        echo "<p> diskon 5% </p>";
        echo "<p>$TotalSetelahDiskon </p>";
        
        echo "</div>";
        
    }
  ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>