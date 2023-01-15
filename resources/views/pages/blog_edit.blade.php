@extends('pages.master')
@section('content')
  <div class="blg_edit">
    <form method="POST" action="/blog_update/{{$data->Bloga_ID}}">
      @csrf
      <div class="form-group">
        <label for="nosaukums">Nosaukums:</label>
        <input type="text" class="form-control" name="nosaukums" id="nosaukums" value="{{$data->nosaukums}}" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
      </div>
      <div class="form-group">
        <label for="galerija">Galerija:</label>
        <input type="text" class="form-control" name="galerija" id="galerija" value="{{$data->galerija}}" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
      </div>
      <div class="form-group">
        <label for="apraksts">Apraksts:</label>
        <input type="text" class="form-control" name="apraksts" id="apraksts" value="{{$data->apraksts}}" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
      </div>
      <button type="submit" id="blg_edit_btn" class="btn btn-primary">Saglabāt</button>
    </form>
  </div>
@endsection