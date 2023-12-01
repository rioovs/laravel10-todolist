@extends('layouts.app')

@section('title', 'Laravel 10 Task List App')
@section('content')
    {{-- @if (count($tasks)) --}}
    @forelse ($tasks as $tasks)
        <div>
            <a href="{{ route('tasks.show', ['id' => $tasks->id]) }}"> {{ $tasks->title }} </a>
        </div>
    @empty
        <div>there are not tasks !</div>
    @endforelse
    {{-- @endif --}}
@endsection
