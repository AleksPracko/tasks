<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <style>
        .completed{
            text-decoration-line: line-through;
        }
    </style>
</head>
<body>
    <h1><strong @class(['completed' => $task->completed])>{{ $task->name }}</strong></h1>
    <p @class(['completed' => $task->completed])>{{ $task->description }}</p>
</body>
</html>