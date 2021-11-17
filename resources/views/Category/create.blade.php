
@extends('layouts.app')

@section('title', 'New Category')
@section('content')
    <h1 class="text-center">Create new category</h1>
    <form method="post" action="{{route('category.store')}}" >
        @csrf
        <div class="mb-3">
            <label for="category"  class="form-label">Category Name</label>
            <input type="text" name="name" required class="form-control" id="category">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
