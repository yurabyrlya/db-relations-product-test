
@extends('layouts.app')

@section('title', 'Category List')
@section('content')
    <h1 class="text-center">Category list</h1>
    <a href="{{route('category.create')}}" class="link-primary">Add new Category</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $category)
            <tr>
                <th scope="row">{{$category['id']}}</th>
                <td>{{$category['name']}}</td>
                <td>
                    <a href="{{route('category.edit', ['category' => $category['id']] )}}" class="link-secondary"> Edit</a>
                    |
                    <a href="{{route('category.destroy', ['category' => $category['id']] )}}" class="link-secondary"> Delete</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
