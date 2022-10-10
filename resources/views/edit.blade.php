<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud</title>
    <link rel="stylesheet" href="">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column">
            <h4>{{ $Title }}</h4>
            @if(Session::get('succes'))
                <div class=" alert alert-succes">
                    {{ Session::get('succes') }}
                </div>
            @endif
            @if(Session::get('fail'))
                <div class=" alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif

            <form action="{{ route('update') }}" method="post">
                @csrf
                <input type="hidden" name="cid" value="{{ $Info->id }}">
                <div class="form-group">
                    <label for="">Character Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name"
                           value="{{ $Info->name }}">
                    <span>@error('name'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="">Village</label>
                    <input type="text" class="form-control" name="village" placeholder="Enter village name"
                           value="{{ $Info->village }}">
                    <span>@error('village'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="">Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Enter character age"
                           value="{{ $Info->age }}">
                    <span>@error('age'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="">Rank</label>
                    <input type="text" class="form-control" name="rank" placeholder="Enter rank"
                           value="{{ $Info->rank }}">
                    <span>@error('rank'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="">Gender</label>
                    <input type="text" class="form-control" name="gender" placeholder="Enter gender"
                           value="{{ $Info->gender }}">
                    <span>@error('gender'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter description"
                           value="{{ $Info->description }}">
                    <span>@error('description'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="button">Edit Ninja</button>
                </div>
            </form>
    </div>
</div>
</body>
</html>
