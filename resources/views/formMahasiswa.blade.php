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
    <form class="form-horizontal" action="{{ url('mahasiswa/add')}}" method="POST" enctype="multipart/form-data" style="margin-top: 50px;">
    @csrf
    <div class="form-group">
        <label class="control-label col-sm-2" for="">Nama :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" placeholder="nama lengkap" style="width: 600px;" name="nama">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="">NIM :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nim" placeholder="NIM" style="width: 600px;" name="nim">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="">Tanggal lahir :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="tgl_lahir" placeholder="yyyy-mm-dd" style="width: 600px;" name="tgl_lahir">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="">Tahun masuk :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="thn_masuk" placeholder="yyyy" style="width: 600px;" name="tahun_masuk">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="">Alamat :</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="alamat" placeholder="Alamat lengkap" style="width: 600px;" name="alamat">
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