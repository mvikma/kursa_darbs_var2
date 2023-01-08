@extends('pages.master')

@section('content')
<div class="shop_section">
  <h2>Veikals</h2>
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/shop">Veikals</a></li>
            <li class="active">Ogas</li>
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
          <a href="details/5">
          <div class="thumbnail">
            <img src="pro_oga1.jpg" alt="...">
            <div class="caption">
              <h3>Saldēti Smiltsērkšķi</h3>
              <p>Cena atkarīga no daudzuma, lūdzu sazinieties ar mums par šo.</p>
              <p><a href="#" class="btn btn-primary" role="button">Pievienot Ratiem</a></p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-4">
          <a href="details/6">
          <div class="thumbnail">
            <img src="pro_oga2.jpg" alt="...">
            <div class="caption">
              <h3>Saldētas Cidonijas</h3>
              <p>Cena atkarīga no daudzuma, lūdzu sazinieties ar mums par šo.</p>
              <p><a href="#" class="btn btn-primary" role="button">Pievienot Ratiem</a></p>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection