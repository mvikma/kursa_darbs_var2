@extends('pages.master')
@section('content')
  <div class="pro_form">
    <form method="POST" action="/product_form">
      @csrf
        <div class="form-group">
          <label for="nosaukums">Nosaukums:</label>
          <input type="text" class="form-control" name="nosaukums" id="nosaukums" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
        </div>
        <div class="form-group">
          <label for="cena">Cena:</label>
          <input type="text" class="form-control" name="cena" id="cena" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
        </div>
        <div class="form-group">
          <label for="kategorija">Kategorija:</label>
          <input type="text" class="form-control" name="kategorija" id="kategorija" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
        </div>
        <div class="form-group">
          <label for="galerija">Galerija:</label>
          <input type="text" class="form-control" name="galerija" id="galerija" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
        </div>
        <div class="form-group">
          <label for="apraksts">Apraksts:</label>
          <input type="text" class="form-control" name="apraksts" id="apraksts" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
        </div>
        <div>
        <button type="submit" id="pro_form_btn" class="btn btn-primary">Pievienot produktu</button>
        </div>
    </form>
  </div>
@endsection