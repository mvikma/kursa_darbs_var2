@extends('pages.master')
@section('content')
  <div class="admin_edit_form">
    <form method="POST" action="/admin_update">
      @csrf
      <input type="hidden" name="id" value="{{$data['id']}}">
      <div class="form-group">
        <label for="name">Vārds:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$data['name']}}" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
      </div>
      <div class="form-group">
        <label for="email">E-pasts:</label>
        <input type="text" class="form-control" name="email" id="email" value="{{$data['email']}}" oninvalid="this.setCustomValidity('Jaaizpilda lauks un jābūt kaut kam ap @')" onchange="this.setCustomValidity('')">
      </div>
      <div class="form-group">
        <label for="password">Parole:</label>
        <input type="text" class="form-control" name="password" id="password" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
      </div>
      <div class="form-group">
        <label for="password-confirm">Apstiprināt Parole:</label>
        <input type="password-confirm" class="form-control" name="password-confirm" id="password-confirm" oninvalid="this.setCustomValidity('Jaaizpilda lauks')" onchange="this.setCustomValidity('')">
      </div>
      <div>
        <button type="submit" id="admin_edit_btn" class="btn btn-primary">Saglabāt</button>
      </div>
    </form>
  </div>
@endsection