<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <h1 class="text-center">Autentication Sing In</h1>
            </div>
        </div>
        <div class="row border border-4 p-4">
            <div class="col-12">
                <form action="/auth" method="POST">
                @csrf

                    <div class="form-group my-3">
                        <label for="email">User Email</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group my-3">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password" placeholder="******">
                    </div>
                  
                    <div class="form-group my-3">
                        <input class="btn btn-primary" type="submit" value="Authenticate">
                    </div>
                </form>

              
                <div class="row my-4">

                @if(session('msg'))
                    <div class="col">
                            <p class="fw-bolder">{{ session('msg') }}</p>
                    </div>
                @endif

                    <div class="col">
                        <a class="btn btn-outline-success fw-bolder" href="/register">Go to Register</a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
  
</body>
</html>