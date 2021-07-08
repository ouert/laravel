@extends('layouts.app')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
      <h1>3WA Resto</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
          @foreach ($meals as $meal)
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ $meal->photo }}" alt="">

              <div class="card-body">
                  <h3>{{ $meal->name }}</h3>
                <p class="card-text">{{ $meal->description }}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to cart</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Show details</button>
                  </div>
                  <small class="text-muted">{{ $meal->sell_price }} €</small>
                </div>
              </div>
            </div>
          </div>
          @endforeach
      </div>
      {{ $meals->links() }}
    </div>
  </div>
@endsection
