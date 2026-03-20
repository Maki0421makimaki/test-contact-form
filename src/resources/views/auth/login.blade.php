<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/auth/auth.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">FashionablyLate</a>
            <a href="/register" class="header__link">register</a>
        </div>
    </header>

    <main class="auth-content">
        <h2 class="auth-content__heading">Login</h2>

        <form class="auth-form" action="/login" method="post">
            @csrf

            <div class="form__group">
                <label class="form__label" for="email">メールアドレス</label>
                <input class="form__input" type="email" name="email" id="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                @error('email')
                    <p class="form__error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__group">
                <label class="form__label" for="password">パスワード</label>
                <input class="form__input" type="password" name="password" id="password" placeholder="例: coachtech1106">
                @error('password')
                    <p class="form__error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__button">
                <button class="form__button-submit" type="submit">ログイン</button>
            </div>
        </form>
    </main>
</body>
</html>