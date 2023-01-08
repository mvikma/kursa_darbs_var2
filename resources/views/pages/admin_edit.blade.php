@extends('pages.master')
@section('content')
<form method="POST" action="/admin_update">
    @csrf
    <input type="hidden" name="admin_id" value="{{$data['admin_id']}}">
    <div class="form-group">
      <label for="vards">Vards:</label>
      <input type="text" class="form-control" name="vards" id="vards" value="{{$data['vards']}}">
    </div>
    <div class="form-group">
        <label for="uzvards">Uzvards:</label>
        <input type="text" class="form-control" name="uzvards" id="uzvards" value="{{$data['uzvards']}}">
    </div>
    <div class="form-group">
        <label for="nosaukums">Parole:</label>
        <input type="password" class="form-control" name="password" id="password" value="{{$data['password']}}">
    </div>
    <button type="submit" class="btn btn-primary">Saglabāt</button>
  </form>
  @endsection