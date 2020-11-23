@extends('template/layout')
@section('title', 'input')
@section('isi')
<!-- Begin Page Content -->
<div>
	<div class="panel-heading">
		<h4>Lihat data</h4>
	</div>
	<div class="panel-body">
		<form action="{{url('create')}}" method="get">
		</form>
		<table class="table table-hover table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>Vendor</th>
					<th>Masuk</th>
					<th>Keluar</th>
					<th>Sisa</th>
					<!-- <th>Action</th> -->
				</tr>
			</thead>
			<tbody>@foreach($data as $key => $d)
				<tr>
					<td><a href="{{url('edit',array($d->id))}}">{{ $d->vendor }}</a></a>
					</td>
					<td>{{ $d->datamasuk }}</td>
					<td>{{ $d->datakeluar }}</td>
					<td>{{intval($d->datamasuk) - intval($d->datakeluar)}}</td>
				</tr>@endforeach</tbody>
		</table>
	</div>
</div>
</div>
</div>
</body>

</html>@endsection