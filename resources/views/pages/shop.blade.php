@extends('pages.master')

@section('content')
<div class="shop_section">
<h2>Veikals</h2>
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Veikals</li>
          </ol>
    </div>
</div><!--end breadcrumbs -->

<div class="products-section container">
    <div class="sidebar">
        <h3>Pēc Kategorijas</h3>
        <ul class="nav nav-pills text-left">
            <li role="presentation" class="active"><a href="/berry">Ogas</a></li>
            <li role="presentation"><a href="/juice">Sulas</a></li>
            <li role="presentation"><a href="/candy">Sukādes</a></li>
          </ul>
          @guest
            @else
          <ul class="text-right">
            <p><a href="/product_form" class="btn btn-primary" role="button">Pievienot Produktu</a></p>
          </ul>
          @endguest
    </div> <!-- end sidebar -->
      <div class="row">
        @foreach($products as $item)
        <div class="col-sm-6 col-md-4">
          <a href="details/{{$item['id']}}">
            <div class="thumbnail">
            <img src="images/{{$item['galerija']}}" alt="...">
            <div class="caption">
              <h3>{{$item['nosaukums']}}</h3>
              <p>{{$item['cena']}}</p>
            </div>
          </div>
        </a>
        </div>
        @endforeach
      </div>
    </div>
</div>
@endsection