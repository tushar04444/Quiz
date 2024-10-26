@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
               <div class="card">
                <div class="card-header">
                    <h3>Category List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Sl</th>
                            <th>Category Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($category as $key=>$categories)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $categories->category_name }}</td>
                                <td>{{ $categories->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
               </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Category</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="mt-3">
                                <input type="text" placeholder="Add Category" class="form-control" name="category_name">
                            </div>
                            @if (session('category_added'))
                                <div class="my-3">
                                    <div class="alert alert-info">{{ session('category_added') }}</div>
                                </div>
                            @endif
                            <div class="mt-3">
                                <button class="btn btn-primary">Add Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection