<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認</title>
</head>
<style>

</style>

<body>
    <h1>内容確認</h1>
    <form action="create" method="post">
        @csrf
        <table>
            <tr>
                <td>
                    お名前
                </td>
                <td>
                    {{ $inputs['fullname'] }}
                    <input type="hidden" name="fullname" value="{{ $inputs['fullname'] }}">
                </td>
            </tr>
            <td>
                性別
            </td>
            <td>
                @if($inputs['gender']==1)
                男性
                @else
                女性
                @endif
                <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
            </td>
            </tr>
            <tr>
                <td>
                    メールアドレス
                </td>
                <td>
                    {{ $inputs['email'] }}
                    <input type="hidden" name="email" value="{{ $inputs['email'] }}">
                </td>
            </tr>
            <tr>
                <td>
                    郵便番号
                </td>
                <td>
                    {{ $inputs['postcode'] }}
                    <input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}">
                </td>
            </tr>
            <tr>
                <td>
                    住所
                </td>
                <td>
                    {{ $inputs['address'] }}
                    <input type="hidden" name="address" value="{{ $inputs['address'] }}">
                </td>
            </tr>
            <tr>
                <td>
                    建物名
                </td>
                <td>
                    {{ $inputs['building_name'] }}
                    <input type="hidden" name="building_name" value="{{ $inputs['building_name'] }}">
                </td>
            </tr>
            <tr>
                <td>
                    ご意見
                </td>
                <td>
                    {{ $inputs['option'] }}
                    <input type="hidden" name="option" value="{{ $inputs['option'] }}">
                </td>
            </tr>
        </table>
        <button type="submit">送信</button>
        <a href="/fix">修正する</a>

    </form>
</body>

</html>