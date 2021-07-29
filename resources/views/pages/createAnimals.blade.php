@extends('template.main')

@section('content')
    <h1>Add animal</h1>

    <section>
        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Species</label>
              <input name="species" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Age</label>
              <input name="age" type="number" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Add animal</button>
          </form>
    </section>
@endsection