@extends('pages.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5 text-center">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase mb-0">Admini</h5>
                </div>
                <ul class="text-right">
                    <p><a href="/admin_form" class="btn btn-primary" role="button">Pievienot Admin</a></p>
                </ul>
                <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">
                      <thead>
                        <tr>
                          <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                          <th scope="col" class="border-0 text-uppercase font-medium">Vārds</th>
                          <th scope="col" class="border-0 text-uppercase font-medium">Uzvārds</th>
                          <th scope="col" class="border-0 text-uppercase font-medium">Pārvaldīt</th>
                        </tr>
                      </thead>
                      <tbody>
                    
                        @foreach($admin as $item)
                        <tr>
                        <td class="pl-4">{{$item['admin_id']}}</td>
                        <td>
                            <h5 class="font-medium mb-0">{{$item['vards']}}</h5>
                        </td>
                        <td>
                          <h5 class="font-medium mb-0">{{$item['uzvards']}}</h5>
                          </td>                
                        <td>
                          <a href="delete/admin/{{$item['admin_id']}}"><button type="button" class="btn btn-primary">Dzēst Admin</button></a>
                          <a href="/admin_edit/{{$item['admin_id']}}"><button type="button" class="btn btn-primary">Rediģēt Admin</button></a>
                        </td>
                    </tr>    
                        @endforeach   
                    
                         </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection