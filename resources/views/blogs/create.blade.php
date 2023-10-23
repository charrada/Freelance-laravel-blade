@extends('layouts.app')
@section('styles')
<style>

body {
        background-image: url('{{ asset('img/blog2.jpg') }}');
        background-size: cover;
        background-position: center;
    }

</style>
@endsection
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Create a New Blog</h1>
    <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data" class="bg-light p-4 rounded">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="image">Blog Image:</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection