
@extends('layouts.app')

@section('title', 'Product List')
@section('content')
    <h1 class="text-center">Product list</h1>
    <a href="{{route('product.create')}}" class="link-primary">Add new Product</a>
    |
    <a href="{{route('category.index')}}" class="link-primary">Categories List</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Category</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $product)
            <tr>
                <th scope="row">{{$product['id']}}</th>
                <td>{{$product['name']}}</td>
                <td>{{$product['quantity']}}</td>
                <td>{{$product['category']['name']}}</td>
                <td>
                    <a href="{{route('product.edit', ['product' => $product['id']] )}}" class="link-secondary"> Edit</a>
                    |
                    <a href="{{route('product.destroy', ['product' => $product['id']] )}}" class="link-secondary"> Delete</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
