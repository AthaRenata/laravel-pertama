<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
<center>
<div class="container mt-4">
    <h3>LOGIN</h3>
<div class="card w-50">
  <div class="card-body">
    <form method="post">
        @csrf
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" required autofocus class="form-control">
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required class="form-control"><br>
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
        @if (session()->has('loginError'))
        <li>
            {{ session('loginError') }}
        </li>
        @endif
        <br>
        <input type="submit" name="submit" value="Log in" class="btn btn-primary form-control">
    </form>
  </div>
</div>
</div>
</center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>