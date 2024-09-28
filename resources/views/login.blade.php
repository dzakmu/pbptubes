<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DipoACE Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="background">
        <div class="overlay"></div>
        <div class="login-box">
            <div class="logo">
                <img src="img/dipoace.png" alt="DipoACE Logo">
            </div>
            @if ($errors -> any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors -> all() as $item )
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="login-form" action="" method="POST">
                @csrf
                <h2>LOGIN</h2>
                <div class="input-group">
                    <label for="email">Email/NIP/NIM</label>
                    <input type="email" value="{{ old('email') }}" name="email" placeholder="Email/NIP/NIM">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <div class="forgot-password">
                    <a href="#">forgot your password?</a>
                </div>
                <button type="submit" class="login-btn" name="submit" value="submit">LOG IN</button>
            </form>
        </div>
    </div>
</body>
</html>
