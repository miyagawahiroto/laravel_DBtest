<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Mail</th>
            <th>Address</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>
                <form action="edit" method="get">
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <input type="submit" value="{{$item->id}}">
                </form>
            </td>
            <td>{{$item->username}}</td>
            <td>{{$item->usermail}}</td>
            <td>{{$item->address}}</td>
        </tr>
        @endforeach
    </table>
    <div><a href="{{ url('/add') }}"> Add </a></div>
    <div><a href="{{ url('/dell') }}"> Dell </a></div>

</body>

</html>