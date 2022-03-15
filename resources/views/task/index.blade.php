<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    @forelse ($tasks as $task)
        <h4><strong>{{ $task->name }}</strong></h4> <br />
        <p>{{ $task->description }}</p> <br />
    @empty
    There are no tasks
    @endforelse
</body>
</html>