@extends ('layouts.app')

@section('page-title', 'Lista comics')
    

@section('main-content')
    <section class="container">
        <h1>Lista dc comics</h1>
        <div class="jumbotron">
            <img class="img-fluid" src="{{Vite::asset('public/images/jumbotron.jpg')}}" alt="logo-header" />

        </div>
       
          <div class="load-but">
            <button>LOAD MORE</button>
          </div>
        </div>
        <div class="row">

            @foreach($comics as $comic)
            <div class="col-2 g-3">
                <div class="card h-100">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['title']}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic['title']}}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">{{$comic['series']}}</h6>
                      <p class="card-text">{{$comic['price']}}</p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
        
    </section>
@endsection