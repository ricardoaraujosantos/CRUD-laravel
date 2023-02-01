<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- cdn bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update</title>
</head>
<body>
    <div class="container my-4">
        <h1>Update user</h1>
        <a class="btn btn-secondary" href="/list">PREV</a>
    </div>
    
    <div class="container">
        
        <form action="/events/update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group my-4 py-4">
                <label for="image">Add User Image</label>
                <input class="form-control-file" type="file" id="image" name="image">
                <img class="rounded float-start" width="60" height="60" src="/img/events/{{ $user->image }}" alt="user image"/>
            </div>
            <div class="form-group my-3">
                <label for="name">Name</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="form-group my-3">
                <label for="email">Email</label>
                <input class="form-control" type="text" id="email" name="email" value="{{ $user->email }}">
            </div>
            <input class="btn btn-primary" type="submit" value="Update user">
        </form>

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger my-2">{{ $error }}</p>
            @endforeach
        @endif

    </div>
</body>
</html>