<!DOCTYPE html>
<html lang="en">
<head>
  <title>BARCODE ELLOSIA SEMENTARA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div style="margin: 10%;">
  	<h2 class="text-center">BARCODE ELLOSIA SEMENTARA</h2>
  	<form class="form-horizontal" method="post" action="barcode.php" target="_blank">
  	<div class="form-group">
      <label class="control-label col-sm-2" for="product">Nama Barang</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="product" name="product" placeholder="Nama barang (variasi)">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_id" >Nama</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="product_id" name="product_id" placeholder="SKU/BARCODE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="rate">Harga</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="rate"  name="rate" placeholder="Rp. 1.000.000">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="print_qty">Banyaknya</label>
      <div class="col-sm-10">          
        <input autocomplete="OFF" type="print_qty" class="form-control" id="print_qty"  name="print_qty" placeholder="isi (1) saja">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">PRINT</button>
      </div>
    </div>
  </form>
  </div>
</div>
</body>
<footer>
  <p style="margin-left: 50%">Copyright @ 2020 Cemol</p>
</footer>
</html>