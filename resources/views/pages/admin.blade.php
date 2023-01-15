@extends('pages.master')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="user_card">
          <div class="table-responsive">
            <div class="card-body">
              <h5 class="card-title text-uppercase mb-0">Admini</h5>
            </div>
            @if (Route::has('register'))
              <ul class="text-right">
                <p><a href="/admin_form" class="btn btn-primary" role="button">Pievienot Admin</a></p>
              </ul>
            @endif
            <table class="table no-wrap user-table mb-0">
              <thead>
                <tr>
                  <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                  <th scope="col" class="border-0 text-uppercase font-medium">Vārds</th>
                  <th scope="col" class="border-0 text-uppercase font-medium">E-pasts</th>
                  <th scope="col" class="border-0 text-uppercase font-medium">Pārvaldīt</th>
                </tr>
              </thead>
              <tbody>
                <h5>Dzēšot adminu atcerieties pārrediģēt blogus un produktus no admin, kuru dzēšiet</h5>
                @foreach($admin as $item)
                  <tr>
                    <td class="pl-4">{{$item['id']}}</td>
                    <td>
                      <h5 class="font-medium mb-0">{{$item['name']}}</h5>
                    </td>
                    <td>
                      <h5 class="font-medium mb-0">{{$item['email']}}</h5>
                    </td>                
                    <td>
                      <div class="col-sm-12 text-center">
                        <a href="delete/admin/{{$item['id']}}"><button type="button" class="btn btn-primary">Dzēst Admin</button></a>
                        <a href="/admin_edit/{{$item['id']}}"><button type="button" class="btn btn-primary">Rediģēt Admin</button></a>
                      </div>
                    </td>
                  </tr>    
                @endforeach  
              </tbody>        
            </table>
            <h5 >Dzēšot adminu atcerieties pārrediģēt blogus un produktus no admin, kuru dzēšiet</h5>                                    
          </div>
        </div>
      </div> 
    </div>
  </div>
@endsection 