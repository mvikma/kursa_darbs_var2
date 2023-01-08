@extends('pages.master')
@section('content')
@if($errors->any())
<span style="color:red font">Jaaizpilda visi lauki</span>
@endif
<form method="POST" action="/blog_form">
    @csrf
    <div class="form-group">
      <label for="nosaukums">Nosaukums:</label>
      <input type="text" class="form-control" name="nosaukums" id="nosaukums" placeholder="Bloga nosaukums">
    </div>
    <div class="form-group">
      <label for="galerija">Galerija:</label>
      <input type="text" class="form-control" name="galerija" id="galerija" placeholder="Bloga attēls">
    </div>
    <div class="form-group">
        <label for="apraksts">Apraksts:</label>
        <textarea class="form-control" name="apraksts" id="apraksts"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Pievienot blogu</button>
  </form>
@endsection