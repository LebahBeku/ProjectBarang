<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Halaman Barang</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <a href="barang/create" class="btn btn-success">Tambah Data Baru</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Merk Barang</th>
        <th>Model Barang</th>
        <th>Stok</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($barang as $barangs)
      <tr>
        <td>{{$barangs['id']}}</td>
        <td>{{$barangs['nama']}}</td>
        <td>{{$barangs['merk']}}</td>
        <td>{{$barangs['model']}}</td>
        <td>{{$barangs['stok']}}</td>
        
        <td><a href="{{action('BarangController@edit', $barangs['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('BarangController@destroy', $barangs['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
