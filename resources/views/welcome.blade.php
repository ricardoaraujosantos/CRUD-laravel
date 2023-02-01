<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- cdn bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
    <div class="container my-4">
        <div class="row">
            <div class="col my-4">
                <h1 class="text-danger">CRUD Laravel</h1>
            </div>
            </div>
        <div class="row">
            <div class="col my-4">
                <a class="btn btn-outline-success fw-bolder fs-4" href="/login">Sign In</a>
            </div>
            <div class="col my-4">
                <a class="btn btn-outline-success fw-bolder fs-4" href="/register">Register</a>
            </div>
        </div> 

    @if(session('msg'))
        <div class="row my-4">
            <div class="col">
                    <p class="fw-bolder">{{ session('msg') }}</p>
            </div>
        </div>
    @endif
    
    </div>   
</body>
</html>