<form action="/tasks" method="POST">
    @csrf
    <input type="text" name="title" placeholder="New Task" required>
    <button type="submit">Add</button>
</form>

<ul>
    @foreach ($tasks as $task)
        <li>
            {{ $task->title }}
            <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>