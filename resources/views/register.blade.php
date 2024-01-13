<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTRASI</title>
</head>
<body>
    <h3>FORM REGISTRASI</h3>
    @foreach ($errors->all() as $error)
    <li>
        {{ $error }}
    </li>
    @endforeach
    <form action="register" method="post">
        @csrf
        <label for="name">Nama</label><br>
        <input type="text" name="name" id="name" required><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" required><br>
        <label for="birth_date">Tanggal Lahir</label><br>
        <input type="date" name="birth_date" id="birth_date" required><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required><br>
        <br>
        <input type="submit" name="submit" value="Registrasi">
    </form>
</body>
</html>


