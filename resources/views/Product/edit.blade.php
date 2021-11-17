
@extends('layouts.app')
@section('title', 'Update Product')
@section('content')
    <h1 class="text-center">Update product</h1>
    <form method="post" action="{{route('product.update', $product['id'])}}" >
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name"  class="form-label">Product Name</label>
            <input type="text" name="name" value="{{$product['name']}}" required class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="quantity"  class="form-label">Quantity</label>
            <input type="number" value="{{$product['quantity']}}" name="quantity" required class="form-control" id="quantity">
        </div>
        <div class="mb-3">
            <label for="category"   class="form-label">Select Category</label>
            <select class="form-select" name="category" id="category"  required aria-label="Category">
                @foreach($categories as $category)
                    @if($category['id'] == $product['category_id'])
                        <option selected value="{{$category['id']}}">{{$category['name']}}</option>
                    @else
                        <option value="{{$category['id']}}">{{$category['name']}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
