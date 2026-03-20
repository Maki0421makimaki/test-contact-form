<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/contact/index.css') }}">

</head>
<body>
    <header class="header">
        <h1>FashionablyLate</h1>
    </header>

    <h2 class="title">Contact</h2>

    <div class="form-container">
        <form action="/confirm" method="POST" novalidate>
            @csrf
            <div class="form-group">
                <label class="form-label">お名前 <span class="required">※</span></label>
                <div class="form-control">
                    <div class="name-group">
                        <input type="text" name="last_name" placeholder="例: 山田" class="input" required value="{{ old('last_name') }}">
                        <input type="text" name="first_name" placeholder="例: 太郎" class="input" required value="{{ old('first_name') }}">
                    </div>
                    <div class="error-box">
                        @error('last_name')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        @error('first_name')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">性別<span class="required">※</span></label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="1" checked><span> 男性</span></label>
                    <label><input type="radio" name="gender" value="2"><span> 女性</span></label>
                    <label><input type="radio" name="gender" value="3"><span>その他</span></label>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">メールアドレス <span class="required">※</span></label>
                <div class="form-control">
                    <input type="email" name="email" placeholder="例: test@example.com" class="input" required value="{{ old('email') }}">
                    <div class="error-box">
                        @error('email')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">電話番号 <span class="required">※</span></label>
                <div class="form-control">
                    <div class="tel-group">
                        <input type="text" name="tel1" placeholder="080" class="tel-input" required value="{{ old('tel1') }}"><span>-</span>
                        <input type="text" name="tel2" placeholder="1234" class="tel-input" required value="{{ old('tel2') }}">
                        <span>-</span>
                        <input type="text" name="tel3" placeholder="5678" class="tel-input" required value="{{ old('tel3') }}">
                    </div>
                    <div class="error-box">
                        @error('tel1')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        @error('tel2')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        @error('tel3')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">住所 <span class="required">※</span></label>
                <div class="form-control">
                    <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" class="input" required value="{{ old('address') }}">
                    <div class="error-box">
                        @error('address')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">建物名</label>
                <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" class="input" value="{{ old('building') }}">
            </div>

            <div class="form-group">
                <label class="form-label">お問い合わせの種類 <span class="required">※</span></label>
                <div class="form-control">
                    <select name="category" class="input" required>
                        <option value="">選択してください</option>
                        <option value="1">商品のお届けについて</option>
                        <option value="2">商品の交換について</option>
                        <option value="3">商品トラブル</option>
                        <option value="4">ショップへのお問い合わせ</option>
                        <option value="5">その他</option>
                    </select>
                    <div class="error-box">
                        @error('category')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">お問い合わせ内容 <span class="required">※</span></label>
                <div class="form-control">
                    <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" class="textarea" required value="{{ old('detail') }}"></textarea>
                    <div class="error-box">
                        @error('detail')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-button">
                <button type="submit">確認画面</button>
            </div>

        </form>

    </div>
</body>
</html>