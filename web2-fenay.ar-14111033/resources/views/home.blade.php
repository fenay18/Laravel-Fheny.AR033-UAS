@extends('layout.default')
@section('content')
<form method="post">
	<table border="1" width="75%" align="center">
		<tr>
			<th><a href="add"><input type="button" value="+ Tambah"></a></th>
		</tr>
		<tr bgcolor="#959595">
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
@foreach($homeList as $list)
		<tr>
			<td>{{$list->id}}</td>
			<td>{{$list->nim}}</td>
			<td>{{$list->nama}}</td>
			<td>{{$list->alamat}}</td>
			<td><a href="{{URL::to('edit/'.$list->id)}}">Edit</a>
			<a href="{{URL::to('hapus/'.$list->id)}}">Delete</a></td>
			
		</tr>
@endforeach
	</table>
</form>	
@stop