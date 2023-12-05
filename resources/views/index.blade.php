@extends('layouts.app')

@section('title', 'Laravel 10 Task List App')
@section('content')

    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}"> {{ $task->title }} </a>
        </div>
    @empty
        <div>there are not tasks !</div>
    @endforelse
    @if ($tasks->count())
        <nav> {{ $tasks->links() }}</nav>
    @endif
@endsection
