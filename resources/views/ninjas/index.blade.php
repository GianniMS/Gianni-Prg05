@extends('ninjas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add a ninja!</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ninjas.create') }}"> Add new ninja!</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Village</th>
            <th>Age</th>
            <th>Rank</th>
            <th>Gender</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($ninjas as $ninja)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $ninja->name }}</td>
                <td>{{ $ninja->village }}</td>
                <td>{{ $ninja->age }}</td>
                <td>{{ $ninja->rank }}</td>
                <td>{{ $ninja->gender }}</td>
                <td>{{ $ninja->description }}</td>
                <td>
                    <form action="{{ route('ninjas.destroy',$ninja->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('ninjas.show',$ninja->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('ninjas.edit',$ninja->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $ninjas->links() !!}

@endsection
