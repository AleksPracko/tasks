<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="/task/{task}" method="POST">
        @csrf
        @method('PUT')
        Task name <br />
        <input type="text" name="name" value="{{ $task->name }}"> <br />
        Task description <br />
        <textarea name="description" id="" cols="30" rows="10">{{ $task->description}}</textarea> <br />
        <input type="submit" name="submit">
    </form>
</body>
</html>