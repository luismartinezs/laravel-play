@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <button type="submit">Create Post</button>
    </form>
@endsection
