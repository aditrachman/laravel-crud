<!DOCTYPE html>
<html>
<head>
    <title>CRUD Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Tutorial CRUD Laravel</h4>
            </div>
            <div class="panel-body">
                    <!-- <input type="hidden" name="id" id="id" value="{{$data->id}}"> -->
                    <div class="form-group">
                        <label for="kode">Kode Buku</label>
                        <input type="text" name="kode" id="kode" value="{{$data->kode_buku}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul Buku</label>
                        <input type="text" name="judul" id="judul" value="{{$data->judul}}" class="form-control" readonly>
                    </div>                    
                    <div class="form-group">    
                        <label for="desk">Deskripsi</label>    
                        <input type="text" name="desk" id="desk" value="{{$data->deskripsi}}" class="form-control" readonly>
                    </div>
                    <form action="{{url('back')}}" method="get">
                        <div class="form-group">
                            <input type="submit" value="Back" class="btn btn-success">
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>