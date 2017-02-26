@extends('layout.default')
@section('content')
	<form method="POST" action="{{URL::to('update/'.$homeList->id)}}">
	<input type="hidden" name="id" value="{{$homeList->id}}"/>
		<input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
		<table border="1" width="60%" align="center">
			<tr>
				<th><align ="center" colspan="2">Ubah data</th>
			</tr>
			<tr>
				<td bgcolor="#959595"><strong>NIM</strong></td>
			  <td><Input style="text" name="nim" size="80" value="{{$homeList->nim}}" /></td>
			</tr>
			<tr>
				<td bgcolor="#959595"><strong>Nama</strong></td>
			  <td><input type=" text" name="nama" size="80" value="{{$homeList->nama}}"></td>
			</tr>
			<tr>
				<td bgcolor="#959595"><strong>Alamat</strong></td>
			  <td><input type=" text" name="alamat" size="80"value="{{$homeList->alamat}}"></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" name="btn-edit" value="Simpan" /></td>
			</tr>
		</table>
	</form>
@stop