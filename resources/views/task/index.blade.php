<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        .completed{
            text-decoration-line: line-through;
        }
    </style>
</head>
<body>
    @forelse ($tasks as $task)
        <h4><strong @class(['completed' => $task->completed])>{{ $task->name }}</strong></h4> <br />
        <p @class(['completed' => $task->completed])>{{ $task->description }}</p> <br />
        <form action="/task/{{ $task->id }}" method="POST">
            @csrf
            @method('DELETE')
        <input type="submit" value="delete">
        </form>
    @empty
    There are no tasks
    @endforelse
</body>
</html>