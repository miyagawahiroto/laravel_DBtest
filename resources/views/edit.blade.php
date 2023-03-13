<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="edit" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{$item->id}}">
            <tr>
                <th>:pass</th>
                <td><input type="text" name="pass" value="{{$item->pass}}"></td>
            </tr>
            <tr>
                <th>:name</th>
                <td><input type="text" name="name" value="{{$item->username}}"></td>
            </tr>
            <tr>
                <th>:mail</th>
                <td><input type="text" name="mail" value="{{$item->usermail}}"></td>
            </tr>
            <tr>
                <th>:address</th>
                <td><input type="text" name="address" value="{{$item->address}}"></td>
            </tr>
        </table>
        <input type="submit" value="edit">
    </form>

</body>

</html>