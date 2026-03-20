<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/auth/auth.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate</h1>

            <form action="/logout" method="POST" class="header__form">
                @csrf
                <button type="submit" class="header__link header__button">logout</button>
            </form>
        </div>
    </header>

    <main class="admin">
        <h2 class="admin__ttl">管理画面</h2>

        <p class="admin__text">
            ようこそ、{{ Auth::user()->name }}さん
        </p>
    </main>
</body>
</html>