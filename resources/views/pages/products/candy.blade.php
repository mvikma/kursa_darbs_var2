@extends('pages.master')

@section('content')
<div class="shop_section">
   <h2>Veikals</h2>
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/shop">Veikals</a></li>
            <li class="active">Sukādes</li>
          </ol>
    </div>
</div><!--end breadcrumbs -->

<div class="products-section container">
    <div class="sidebar">
        <h3>Pēc Kategorijas</h3>
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="/berry">Ogas</a></li>
            <li role="presentation"><a href="/juice">Sulas</a></li>
            <li role="presentation"><a href="/candy">Sukādes</a></li>
          </ul>
    </div> <!-- end sidebar -->
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <a href="details/3">
            <div class="thumbnail">
            <img src="zav_cid.jpeg" alt="...">
            <div class="caption">
              <h3>Žāvētas cidonijas</h3>
              <p>€4.00</p>
              <p><a href="#" class="btn btn-primary" role="button">Pievienot Ratiem</a></p>
            </div>
          </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a href="details/4">
            <div class="thumbnail">
            <img src="zav_dzer.jpeg" alt="...">
            <div class="caption">
              <h3>Žāvētas Dzērvenes</h3>
              <p>€6.00</p>
              <p><a href="#" class="btn btn-primary" role="button">Pievienot Ratiem</a></p>
            </div>
          </div>
            </a>
        </div>
      </div>
    </div>
</div>
@endsection