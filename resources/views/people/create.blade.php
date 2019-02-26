
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>

Add a People

    <form action={{ route('people.store') }} method="post">
        @csrf
        
    People   Name :  <input type="text" value="English" name="name"/><br />
    City : <input type="text" name="city" value="lahore" /><br />
    Institution : <input type="text" name="institution" value="superior" /><br />
    Room Number : <input type="text" name="room_id" value="2" />
    <input type="submit" value="add People" />


</form>

    
</body>
</html> 