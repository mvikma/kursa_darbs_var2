@extends('pages.master')

@section('content')
        <div class="blog-section">
                <div class="container">
                    <h1 class="text-center">Blogs</h1>
    
                    <p class="section-description text-center">Šogad tika salasītas +100 tonnas ogu.</p>
                    @guest
                    @else
                    <ul class="text-right">
                        <p><a href="/blog_form" class="btn btn-primary" role="button">Pievienot Blogu</a></p>
                    </ul>
                    @endguest
                    <div class="blog-posts">
                        <div class="row">
                            @foreach($blog as $item)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                <img src="images/{{$item['galerija']}}" alt="...">
                                <div class="caption">
                                  <h3>{{$item['nosaukums']}}</h3>
                                  <p>{{$item['apraksts']}}</p>
                                  <div class="row">
                                    @guest
                                    @else
                                    <div class="col-sm-12 text-center">
                                        <a href="delete/{{$item['Bloga_ID']}}"><button type="button" class="btn btn-primary">Dzēst Blogu</button></a>
                                        <a href="/blog_edit/{{$item['Bloga_ID']}}"><button type="button" class="btn btn-primary">Rediģēt Blogu</button></a>
                                    </div>
                                    @endguest
                                </div>
                                </div>
                              </div>
                            </a>
                            </div>
                            @endforeach
                          </div>
                    </div> <!-- end blog-posts -->
                </div> <!-- end container -->
            </div> <!-- end blog-section -->
@endsection