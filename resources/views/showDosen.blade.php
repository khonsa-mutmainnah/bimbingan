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
  <h2>Show Dosen</h2>
  <br>     
  <div class="table-responsive">
  <table class="table" style="width: 50%;">
    <thead>
      <tr>
        <th style="width: 200px;"></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nama</td>
        <td>{{$Dosen->nama}}</td>
      </tr>
      <tr>
        <td>NIDN</td>
        <td>{{$Dosen->nidn}}</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>{{$Dosen->alamat}}</td>
      </tr>
      <tr>
        <td>Kontak</td>
        <td>{{$Dosen->kontak}}</td>
      </tr>
    </tbody>
  </table>
  </div>
  <a href="/dosen"><button type="button" class="btn-deffault" style="margin-top: 30px;">back</button></a>
</div>

</body>
</html>
