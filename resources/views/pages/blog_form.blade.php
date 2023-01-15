@extends('pages.master')
@section('content')
  <div class="blg_form">
    <form method="POST" action="/blog_form">
      @csrf
      <div class="form-group">
        <label for="nosaukums">Nosaukums:</label>
        <input type="text" class="form-control" name="nosaukums" id="nosaukums" placeholder="Bloga nosaukums" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
      </div>
      <div class="form-group">
        <label for="galerija">Galerija:</label>
        <input type="text" class="form-control" name="galerija" id="galerija" placeholder="Bloga attēls" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
      </div>
      <div class="form-group">
        <label for="apraksts">Apraksts:</label>
        <input type="text" class="form-control" name="apraksts" id="apraksts" placeholder="Bloga attēls" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
      </div>
      <button type="submit" id="blg_form_btn" class="btn btn-primary">Pievienot blogu</button>
    </form>
  </div>
@endsection