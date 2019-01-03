@extends('layouts.app')

@section('content')
<form action="{{url('cicilan')}}" method="post">
	@csrf
<img class="enter" src="{{asset('/images/4.png')}}">
<table class="table" border="solid">
	<tr>
		<th>Nama Laptop:</th>
		<th>
			<input name="namalaptop" value="Asus x505za">
		</th>
		
	</tr>
	<tr>
		<th>Harga:</th>
		<th>Rp.8.000.000</th>
	</tr>
	<tr>
		<th>Uang Muka:</th>
		<th>Rp.800.000</th>
	</tr>
	<tr>
		<th>Cicilan:</th>
		<th>12 X Rp.666.666</th>
		
	</tr>
	<tr>
		<th>Nama:</th>
		<th><input type="text" name="nama" placeholder="Nama Lengkap"></th>
		
	</tr>
	<tr>
		<th>KTM:</th>
		<th><input type="text" name="ktm" placeholder="Kartu Tanda Mahasiswa"></th>
		
	</tr>
	<tr>
		<th>Alamat:</th>
		<th><textarea type="text" name="alamat" placeholder="alamat lengkap"></textarea></th>
		
	</tr>
	
	

	
	
</table>
<button type="submit" name="submit" class="btn btn-md btn-primary">Mulai Cicilan</button>
</form>
@endsection


