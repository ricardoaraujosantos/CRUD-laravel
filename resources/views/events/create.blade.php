<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- cdn bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

       <!-- JQuery Mask -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <title>Create</title>
</head>
<body>
    <div class="container my-4">
        <h1>Create user</h1>
        <a class="btn btn-secondary" href="/list">PREV</a>
    </div>
    
    <div class="container">
        
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group my-3">
                <label for="image">Add User Image</label>
                <input class="form-control-file" type="file" id="image" name="image">
            </div>
            <div class="form-group my-3">
                <label for="name">Name</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Type name">
            </div>
            <div class="form-group my-3">
                <label for="cpf">CPF</label>
                <input class="form-control" type="tel" id="cpf" name="cpf" placeholder="Type CPF">
            </div>
            <div class="form-group my-3">
                <label for="email">Email</label>
                <input class="form-control" type="text" id="email" name="email" placeholder="Type user@gmail">
            </div>
            <div class="form-group my-3">
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" name="password" placeholder="******">
            </div>
           
            <input class="btn btn-primary" type="submit" value="Create user">
        </form>

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger my-2">{{ $error }}</p>
            @endforeach
        @endif

    </div>

    <script>
        $( "#cpf" ).keypress(function() {
            $(this).mask('000.000.000-00');
        });
    </script>
 
</body>
</html>
