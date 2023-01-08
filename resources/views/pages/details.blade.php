@extends('pages.master')

@section('content')
<h2>Veikals</h2>
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/shop">Veikals</a></li>
            <li class="active">{{$product['title']}}</li>
          </ol>
    </div>
</div><!--end breadcrumbs -->
<div class="details-container">
    <div class="col-sm-6">
        <img class="detail-img" src="images/{{$product['galerija']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/shop">Go Back</a>
            @guest
            @else
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a href="/delete/{{$product['id']}}"><button type="button" class="btn btn-primary">Dzēst Produktu</button></a>
                    <a href="/product_edit/{{$product['id']}}"><button type="button" class="btn btn-primary">Rediģēt Produktu</button></a>
                </div>
            </div>
            @endguest
        <h2>{{$product['nosaukums']}}</h2>
        <h3>Cena : {{$product['cena']}}</h3>
        <h4>Detaļas: {{$product['apraksts']}}</h4>
        <h4>Kategorijas: {{$product['kategorija']}}</h4>
        <br><br>
    </div>
</div>
@endsection