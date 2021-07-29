@extends('template.main')

@section('content')
    <section>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$animal->species}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Age : {{$animal->age}}</h6>
              <p class="card-text">ID : {{$animal->id}}</p>
            </div>
            <form action="{{route('delete', $animal->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">DELETE</button>
                <a href="{{route('edit', $animal->id)}}" class="btn btn-info">EDIT</a>
            </form>
        </div>
    </section>
@endsection