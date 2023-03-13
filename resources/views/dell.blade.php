<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="dell" method="post">
        <table>
            @csrf
            <tr>
                <th>:id</th>
                <td><input type="number" name="id"></td>
            </tr>
        </table>
        <input type="submit" value="dell">
    </form>

</body>

</html>