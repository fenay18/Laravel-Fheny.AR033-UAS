@extends('layout.default')
@section('content')
	<form method="POST" action="{{URL::to('store')}}">
	<input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
		<table border="1" width="60%" align="center">
			<tr>
				<th><align ="center" colspan="2">Tambah data</th>
			</tr>
			<tr>
				<td bgcolor="#959595"><strong>NIM</strong></td>
				<td><Input style="text" name="nim" size="80"></td>
			</tr>
			<tr>
				<td bgcolor="#959595"><strong>Nama</strong></td>
				<td><input type=" text" name="nama" size="80"></td>
			</tr>
			<tr>
				<td bgcolor="#959595"><strong>Alamat</strong></td>
				<td><input type=" text" name="alamat" size="80"></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input name="btn-simpan" type="submit" value="Tambah" /></td>
			</tr>
		</table>
	</form>
@stop