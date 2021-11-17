
@extends('layouts.app')

@section('title', 'Create new Product')
@section('content')
    <h1 class="text-center">Create new product</h1>
    <form method="post" action="{{route('product.store')}}" >
        @csrf
        <div class="mb-3">
            <label for="name"  class="form-label">Product Name</label>
            <input type="text" name="name" required class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="quantity"  class="form-label">Quantity</label>
            <input type="number" name="quantity" required class="form-control" id="quantity">
        </div>
        <div class="mb-3">
            <label for="category"   class="form-label">Select Category</label>
            <select class="form-select" name="category" id="category"  required aria-label="Category">
                @foreach($categories as $category)
                    <option value="{{$category['id']}}">{{$category['name']}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
