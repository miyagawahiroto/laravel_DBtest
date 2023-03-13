<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="add" method="post">
        <table>
            @csrf
            <tr>
                <th>:pass</th>
                <td><input type="text" name="pass"></td>
            </tr>
            <tr>
                <th>:name</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>:mail</th>
                <td><input type="text" name="mail"></td>
            </tr>
            <tr>
                <th>:address</th>
                <td><input type="text" name="address"></td>
            </tr>
        </table>
        <input type="submit" value="create">
    </form>

</body>

</html>