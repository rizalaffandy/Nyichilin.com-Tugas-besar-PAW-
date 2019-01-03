@extends('layouts.app')

@section('content')
<center><h1>Kategori: Laptop</h1></center>
   <table class="table">
        <tr>
            <th><a href="{{url('/Cicilan/barang')}}"><img class='gambar' src="{{asset('/images/Laptop.jpg')}}"></a><br><div class="asus">Asus X505ZA</div></th>
            <th><a href=""><img class='gambar' src="{{asset('/images/acer.jpg')}}"></a><br><div class="asus">Acer Aspire 15</div></th>
            <th><a href=""><img class='gambar' src="{{asset('/images/hp.png')}}"></a><br><div class="asus">Dell Inspiron 15</div></th>
            <th><a href=""><img class='gambar' src="{{asset('/images/ac.png')}}"></a><br><div class="asus">Acer Swift 3</div></th>
        </tr>
        <tr>
            <th><a href=""><img class='gambar' src="{{asset('/images/lv.jpg')}}"></a><br><div class="asus">Lenovo Ideapad 320s</div></th>
            <th><a href=""><img class='gambar' src="{{asset('/images/mp.jpg')}}"></a><br><div class="asus">Macbook Pro Touchbar 2018</div></th>
            <th><a href=""><img class='gambar' src="{{asset('/images/14.png')}}"></a><br><div class="asus">HP Pavillion 14</div></th>
            <th><a href=""><img class='gambar' src="{{asset('/images/72.jpg')}}"></a><br><div class="asus">Lenovo Ideapad 720s</div></th>
        </tr>    
   </table>

@endsection

 
    <!-- <br>
    <h3>Asus X455LA</h3>
    <p>memiliki harga mahal</p>

    
    <br>
    <h3>Acer 455I</h3>
    <p>memiliki harga mahal</p>

    <img class='gambar' >
    <br>
    <h3>HP Omen 15</h3>
    <p>memiliki harga mahal</p>
 -->