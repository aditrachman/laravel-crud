@extends('template/layout')
@section('title', 'Dashboard')




@section('isi')
       <!-- Begin Page Content -->
 <div >

<form action="{{url('insert')}}" method="post">
<label for="inputCity"><b>Isi Data</b></label>
  <div class="form-group">
    <select id="vendor" name="vendor" class="form-control">
        <option selected>Pilih vendor</option>
        <option>Semen 3 roda</option>
        <option>Semen bima</option>
        <option>Nusa 300 x 102 asbes</option>
        <option>Nusa 240 x 102 asbes</option>
        <option>Nusa 210 x 102 asbes</option>
        <option>Nusa 180 x 102 asbes</option>
        <option>Nusa 150 x 102 asbes</option>
        <option>Nusa WOOD 150 x 102 asbes</option>

      </select>

    </div>
    <div class="form-group">
    <input type="text" name="datamasuk" id="datamasuk" class="form-control" required="require" placeholder="data masuk">
    </div>
    <div class="form-group">
    <input type="text" name="datakeluar" id="datakeluar" class="form-control" placeholder="data keluar">
    </div>
     <div class="form-group">
     <br>
        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
     </div>
</form>
@endsection
 
 
 
 
 
 
 
 
 
 
 