<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理</title>
</head>
<style>
    svg.w-5.h-5 {
        /*paginateメソッドの矢印の大きさ調整のために追加*/
        width: 30px;
        height: 30px;
    }
</style>


<body>
    <h1>検索</h1>
    <form action="find" method="get">
        <p>名前<input type="text" name="fullname"></p>
        <p>全て<input class="custom-control-input" id="radioGender1" checked="checked" name="gender" type="radio" value="">
            男性<input class="custom-control-input" id="radioGender1" name="gender" type="radio" value="1">
            女性<input class="custom-control-input" id="radioGender1" name="gender" type="radio" value="2">
        </p>
        <p>登録日</p>
        <p>メールアドレス<input type="text" name="email"></p>
        <p><input type="submit" value="検索"></p>
    </form>
    {{ $inputs->links() }}
    <table>
        <tr>
            <th>ID</th>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>ご意見</th>
        </tr>
        @foreach($inputs as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->fullname}}</td>
            <td>{{$item->gender}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->option}}</td>
            <td>
                <form action="{{ route('manager.delete', ['id' => $item->id]) }}" method="post">
                    @csrf
                    <button class="button-delete">削除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <!-- @else
    <p>見つかりませんでした</p>
    @endif -->
</body>

</html>