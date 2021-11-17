
@extends('layouts.app')

@section('title', 'Update Category')
@section('content')
    <h1 class="text-center">Update category "{{$category->name}}"</h1>

    <form method="post" action="{{route('category.update',  $category->id)}}" >
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="category"  class="form-label">Category Name</label>
            <input type="text" name="name" value="{{$category->name}}" required class="form-control" id="category">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
