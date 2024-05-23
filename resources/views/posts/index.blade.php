@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	<a href="{{ route('posts.create') }}">Create New Post</a>
	@foreach ($posts as $post)
		<div>
			<h2>{{ $post->title }}</h2>
			<p>{{ $post->content }}</p>
			<a href="{{ route('posts.edit', $post->id) }}">Edit</a>
			<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit">Delete</button>
			</form>
		</div>
	@endforeach
@endsection
