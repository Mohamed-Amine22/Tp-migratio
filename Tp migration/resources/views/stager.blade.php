<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>title</th>
            <th>description</th>
        </tr>
        @foreach($filieres as $item)
            <tr>
                <td>{{$item->titre}}</td>
                <td>{{$item->description}}</td>
            </tr>
        
        @endforeach
    </table>
    
</body>
</html>