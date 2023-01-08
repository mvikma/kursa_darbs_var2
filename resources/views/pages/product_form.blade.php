@extends('pages.master')
@section('content')
@if($errors->any())
<span style="color:red font">Jaaizpilda visi lauki</span>
@endif
<form method="POST" action="/product_form">
    @csrf
    <div class="form-group">
      <label for="nosaukums">Nosaukums:</label>
      <input type="text" class="form-control" name="nosaukums" id="nosaukums">
    </div>
    <div class="form-group">
        <label for="cena">Cena:</label>
        <input type="text" class="form-control" name="cena" id="cena">
      </div>
      <div class="form-group">
        <label for="kategorija">Kategorija:</label>
        <input type="text" class="form-control" name="kategorija" id="kategorija">
      </div>
    <div class="form-group">
      <label for="galerija">Galerija:</label>
      <input type="text" class="form-control" name="galerija" id="galerija">
    </div>
    <div class="form-group">
        <label for="apraksts">Apraksts:</label>
        <textarea class="form-control" name="apraksts" id="apraksts"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Pievienot produktu</button>
  </form>
@endsection