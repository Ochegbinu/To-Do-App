<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <div style="text-align:center">
        <a href="{{ route('storeTask') }}">Create a new task</a>
        <hr>

        <h2>TASKS</h2>
        @if (session()->has('status'))
            <div style="color:green">
                {{ session()->get('status') }}
            </div>
        @endif
    </div>
    <div style="text-align:center">
        <table>

            <tr>
                <th>TASKS</th>
                <th>Action</th>
                <th>Action</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Mark</th>
            </tr>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->task }}</td>
                    <td><a href="{{ route('edit', ['id' => $task->id]) }}"><button
                                style="background-color:green">Update</button></td>
                    <td><a href="{{ route('destroy', ['id' => $task->id]) }}"><button
                                style="background-color:red">Delete</button></td>
                    <td>{{ $task->created_at }}</td>
                    <td>{{ $task->updated_at }}</td>

                    @if (!$task->completed)
                        <td><a href="{{ route('completed', ['id' => $task->id]) }}"><button
                                    style="background-color:green">mark as completed</button></td>
                    @else
                        <td><a href="{{ route('completed', ['id' => $task->id]) }}"><button
                                    style="background-color:green">completed</button></td>
                    @endif



                </tr>
            @endforeach
        </table>
{{$pages->links()}}
    </div>










</body>

</html>
