@extends('layouts.app')

@section('title', 'Task list')

@section('content')
    @forelse($tasks as $task)
        <div>
            <a href="{{route('tasks.show', ['id'=> $task->id])}}">{{$task->title}}</a>
        </div>
    @empty
        <div>there no tasks</div>
    @endforelse
@endsection
