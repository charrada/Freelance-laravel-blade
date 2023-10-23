@extends('layouts.app')

@section('content')
    <h1>Edit Blog</h1>
    <form action="{{ route('blogs.update', $blogs->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ $blogs->title }}" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description" required>{{ $blogs->description }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection