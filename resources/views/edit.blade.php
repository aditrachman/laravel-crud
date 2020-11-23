@extends('template/layout')
@section('title', 'input')


@section('isi')

    <div >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Edit Data</h4>
            </div>
           <br>
            <div class="panel-body">
                <form action="{{url('update', $data->id)}}" method="post">
                    <div class="form-group">
                        <label for="kode">Data Masuk</label>
                        <input type="text" name="datamasuk" id="kode" value="{{$data->datamasuk}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="judul">Data Keluar</label>
                        <input type="text" name="datakeluar" id="judul" value="{{$data->datakeluar}}" class="form-control">
                    </div>                    
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                        <a class="btn btn-danger" href="{{url('destroy',array($data->id))}}">Delete</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
