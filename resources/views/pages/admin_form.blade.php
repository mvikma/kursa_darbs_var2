@extends('pages.master')
@section('content')
@if($errors->any())
<span style="color:red font">Jaaizpilda visi lauki.</span>
@endif
<form method="POST" action="/admin_form">
    @csrf
    <div class="form-group">
      <label for="vards">Vards:</label>
      <input type="text" class="form-control" name="vards" id="vards">
    </div>
    <div class="form-group">
        <label for="uzvards">Uzvards:</label>
        <input type="text" class="form-control" name="uzvards" id="uzvards">
    </div>
    <div class="form-group">
        <label for="nosaukums">Parole:</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Saglabāt</button>
  </form>
@endsection