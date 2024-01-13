<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body>
    <p>BERANDA > BERANDA</p>
    
    {{ sumNumber(10,3) }}
    
    @foreach ($errors->all() as $error)
    <li>
        {{ $error }}
    </li>
    @endforeach

    @isset($user)
    <h1>SELAMAT DATANG, {{ $user }}</h1>
    @endisset
    @empty($user)
        <p>Anda belum registrasi</p>
    @endempty
</body>
</html>