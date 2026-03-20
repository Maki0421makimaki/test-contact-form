<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
    <link rel="stylesheet" href="{{ asset('css/contact/confirm.css') }}">
</head>
<body>
    <header class="header">
        <h1>FashionablyLate</h1>
    </header>

    <h2 class="title">Confirm</h2>

    <div class="confirm-container">
        <form action="/thanks" method="POST">
            @csrf
            <input type="hidden" name="first_name" value="{{ $inputs['first_name'] }}">
            <input type="hidden" name="last_name" value="{{ $inputs['last_name'] }}">
            <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
            <input type="hidden" name="email" value="{{ $inputs['email'] }}">
            <input type="hidden" name="tel1" value="{{ $inputs['tel1'] }}">
            <input type="hidden" name="tel2" value="{{ $inputs['tel2'] }}">
            <input type="hidden" name="tel3" value="{{ $inputs['tel3'] }}">
            <input type="hidden" name="address" value="{{ $inputs['address'] }}">
            <input type="hidden" name="building" value="{{ $inputs['building'] }}">
            <input type="hidden" name="category" value="{{ $inputs['category'] }}">
            <input type="hidden" name="detail" value="{{ $inputs['detail'] }}">

            <table class="confirm-table">
                <tr>
                    <th>お名前</th>
                    <td>
                        {{ $inputs['last_name'] }}　{{ $inputs['first_name'] }}
                    </td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>
                        @if($inputs['gender'] == 1)
                            男性
                        @elseif($inputs['gender'] == 2)
                            女性
                        @else
                            その他
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>{{ $inputs['email'] }}</td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>
                        {{ $inputs['tel1'] }}{{ $inputs['tel2'] }}{{ $inputs['tel3'] }}
                    </td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>{{ $inputs['address'] }}</td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>{{ $inputs['building'] }}</td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td>
                        @if($inputs['category'] == 1)
                            商品のお届けについて
                        @elseif($inputs['category'] == 2)
                            商品の交換について
                        @elseif($inputs['category'] == 3)
                            商品トラブル
                        @elseif($inputs['category'] == 4)
                            ショップへのお問い合わせ
                        @else
                            その他
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>{{ $inputs['detail'] }}</td>
                </tr>
            </table>

            <div class="button-group">
                <button type="submit" class="submit-btn">送信</button>
                <button type="button" class="back-btn" onclick="history.back()">修正</button>
            </div>
        </form>
    </div>
</body>
</html>