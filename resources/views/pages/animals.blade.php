@extends('template.main')

@section('content')
    <h1>All animals</h1>

    <section>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">SPECIES</th>
                <th scope="col">AGE</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($dataAll as $animal)
             <tr>
                <th scope="row">{{$animal->id}}</th>
                <td><a href="{{route('show', $animal->id)}}">{{$animal->species}}</a></td>
                <td>{{$animal->age}}</td>
              </tr>
             @endforeach
            </tbody>
          </table>
    </section>
@endsection