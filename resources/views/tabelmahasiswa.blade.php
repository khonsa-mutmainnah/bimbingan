<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class=text-center>Mahasiswa</h2>
  <a href="/mahasiswa/create"><button type="button" class="btn btn-warning text-center">create mahasiswa</button></a>            
  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Tahun Masuk</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($Mahasiswa as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->nim}}</td>
        <td>{{$data->alamat}}</td>
        <td>{{$data->tgl_lahir}}</td>
        <td>{{$data->tahun_masuk}}</td>
        <td>
            <a href="/mahasiswa/{{$data->id}}"><button type="button" class="btn btn-success">Show</button></a>
            <a href="/mahasiswa/{{$data->id}}/edit"><button type="button" class="btn btn-primary">Edit</button></a>
            <a href="/mahasiswa/delete/{{$data->id}}"><button type="button" class="btn btn-danger">Delete</button></td></a>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
