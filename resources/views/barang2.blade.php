@extends ('layouts.app')

@section ('content')
<a id="cicil" type="button" class="btn btn-warning" href="{{url('cicil')}}">Cicil Sekarang</a>
	<table>
		<tr>
			<th><img class="enter" src="{{asset('/images/1.png')}}"></th>
			<th><img class="enter" src="{{asset('/images/2.png')}}"></th>
			<th><img class="enter" src="{{asset('/images/3.png')}}"></th>
			<th><img class="enter" src="{{asset('/images/4.png')}}"></th>
		</tr>
	</table>
	<h1 class="text-center">Asus Vivobook 15</h1>
	<h2 class="text-center">Spesifikasi</h2>
	<table class="table" border="1"> 
		<tr>
			<th>Processor</th>
			<th>AMD® Ryzen™ 7 2700U Processor 2.2 GHz (2 M Cache, up to 3.8 GHz)</th>
		</tr>
		<tr>
			<th>Sistem Operasi</th>
			<th>Windows 10 Home</th>
		</tr>
		<tr>
			<th>RAM</th>
			<th>8 GB DDR4 1866MHz SDRAM</th>
		</tr>
		<tr>
			<th>GPU</th>
			<th>AMD Radeon™ RX Vega 10 Graphic</th>
		</tr>
		<tr>
			<th>Display</th>
			<th>15.6" (16:9) LED-backlit HD (1366x768) Anti-Glare 60Hz Panel with 45% NTSCs</th>
		</tr>
	</table>
@endsection


