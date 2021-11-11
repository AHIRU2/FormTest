<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問い合わせ</title>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <!-- <script src="public/index.js" charset="UTF-8"></script> -->
</head>
<style>

</style>

<body>
    <div class="container">
        <h1>お問い合わせ</h1>
        @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        <div class="container">
            <form action="confirm" method="post">
                @csrf
                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">お名前<span class="badge badge-danger ml-1">※</span></p>
                    <div class="col-sm-8">
                        <input type="text" class="input-add" name="fullname" />
                        <!-- <input type="text" class="input-add" name="name2" />
                        <input type="hidden" name="fullname" value=> -->
                    </div>
                </div>
                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">性別<span class="badge badge-danger ml-1">※</span></p>
                    <div class="col-sm-8">
                        男性<input class="custom-control-input" id="radioGender1" checked="checked" name="gender" type="radio" value="1">
                        女性<input class="custom-control-input" id="radioGender1" name="gender" type="radio" value="2">
                    </div>
                </div>
                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">※</span></p>
                    <div class="col-sm-8">
                        <input type="email" class="input-mail" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">郵便番号<span class="badge badge-danger ml-1">※</span></p>
                    <div class="col-sm-8">
                        〒<input type="text" oninput="value = value.replace(/[０-９]/g,s => String.fromCharCode(s.charCodeAt(0) - 65248)).replace(/[ー−]/g,'-').replace(/[^\-\d]/g,'');" name="postcode" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');"><br>
                        <!-- 〒<input type="text" name="zip11" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');" id="postaddress"><br> -->

                    </div>
                </div>
                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">住所<span class="badge badge-danger ml-1">※</span></p>
                    <div class="col-sm-8">
                        <input type="text" name="address" size="60">
                    </div>
                </div>
                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">建物名</p>
                    <div class="col-sm-8">
                        <input type="text" name="building_name" size="60">
                    </div>
                </div>
                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">ご意見<span class="badge badge-danger ml-1">※</span></p>
                    <div class="col-sm-8">
                        <textarea name="option"></textarea>
                    </div>
                </div>
                <button class="button-confirm">確認</button>
            </form>
        </div>
    </div>

</body>

</html>