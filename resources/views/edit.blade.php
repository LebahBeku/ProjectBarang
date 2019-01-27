<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Barang </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit Data Barang</h2><br/>
      <form method="post" action="{{action('BarangController@update', $id)}}">
      @csrf
      <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Nama Barang:</label>
            <input type="text" class="form-control" name="nama" value="{{$barang->nama}}">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="merk">Merk Barang:</label>
              <input type="text" class="form-control" name="merk" value="{{$barang->merk}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="merk">Model Barang:</label>
              <input type="text" class="form-control" name="model" value="{{$barang->merk}}">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="stok">Stok:</label>
            <input type="text" class="form-control" name="stok" value="{{$barang->stok}}">
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