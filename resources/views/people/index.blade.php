<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This a hme</title>
</head>
<body>
Showing All People
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
                <th>Institution</th>
                <th>Room Number</th>
            </tr>
        </thead>
        <tbody>
        @foreach($people as $people)
            <tr>

                <td>{{$people->id}}</td>
                <td>{{$people->name}}</td>
                <td>{{$people->city}}</td>
                <td>{{$people->institution}}</td>
                <td>{{$people->room_id}}</td>
            </tr>
            @endforeach
    
        </tbody> 
    </table>
</body>
</html>