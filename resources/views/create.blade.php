<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <h2 align='center'>Tambah Barang Baru</h2><br/>
      <form method="post" action="{{url('barang')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nama">Nama Barang:</label>
            <input type="text" class="form-control" name="nama">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="merk">Merk Barang:</label>
              <input type="text" class="form-control" name="merk">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="model">Model Barang:</label>
              <input type="text" class="form-control" name="model">
            </div>
        </div>       
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="stok">Stok:</label>
            <input type="text" class="form-control" name="stok">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>