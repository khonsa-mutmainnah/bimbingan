<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h2 class=text-center style="margin-top: 50px;">{{$title}}</h2>
    <form action="{{ url('/dosen/ubah/'.$dosen->id)}}" method="POST" enctype="multipart/form-data" style="margin-top: 50px;">
    @csrf
    <div class="form-group">
        <label class="control-label col-sm-2" for="">Nama :</label>
        <div class="col-sm-10">
        <input type="text" style="width: 600px;" value="{{$dosen->nama}}" class="form-control" id="nama" placeholder="nama lengkap" style="width: 600px;" name="nama">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="">NIDN :</label>
        <div class="col-sm-10">
        <input type="text" style="width: 600px;" value="{{$dosen->nidn}}" class="form-control" id="nidn" placeholder="nidn" style="width: 600px;" name="nidn">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="">kontak :</label>
        <div class="col-sm-10">
        <input type="text" style="width: 600px;" value="{{$dosen->kontak}}" class="form-control" id="kontak" placeholder="yyyy" style="width: 600px;" name="kontak">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="">Alamat :</label>
        <div class="col-sm-10">
        <input type="text" style="width: 600px;" value="{{$dosen->alamat}}" class="form-control" id="alamat" placeholder="Alamat lengkap" style="width: 600px;" name="alamat">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
    </form>
</body>
</html>