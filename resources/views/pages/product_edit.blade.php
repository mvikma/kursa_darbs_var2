@extends('pages.master')
@section('content')
  <div class="pro_edit">
  <!--paņem attiecīgā produkta datus un izmet paziņojumu, ja kāds lauks nav aizpildīts -->
    <form method="POST" action="/product_update/{{$data->id}}">
      @csrf
        <div class="form-group">
          <label for="nosaukums">Nosaukums:</label>
          <input type="text" class="form-control" name="nosaukums" id="nosaukums" value="{{$data->nosaukums}}" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
        </div>
        <div class="form-group">
          <label for="cena">Cena:</label>
          <input type="text" class="form-control" name="cena" id="cena" value="{{$data->cena}}" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
        </div>
        <div class="form-group">
          <label for="kategorija">Kategorija:</label>
          <input type="text" class="form-control" name="kategorija" id="kategorija" value="{{$data->kategorija}}" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
        </div>
        <div class="form-group">
          <label for="galerija">Galerija:</label>
          <input type="text" class="form-control" name="galerija" id="galerija" value="{{$data->galerija}}" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
        </div>
        <div class="form-group">
          <label for="apraksts">Apraksts:</label>
          <input type="text" class="form-control" name="apraksts" id="apraksts" value="{{$data->apraksts}}" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
        </div>
      <button type="submit" id="pro_edit_btn" class="btn btn-primary">Saglabāt</button>
    </form>
  </div>
@endsection