@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3><b>User List</b></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                           @foreach ($user as $key=>$users)
                               <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->email }}</td>
                                <td>{{ $users->created_at->diffForHumans() }}</td>
                                <td><a href="{{ route('user_del',$users->id) }}" class="btn btn-danger">Delete</a></td>
                               </tr>
                           @endforeach
                        </table>
                    </div>
                   </div>
            </div>
        </div>
    </div>
@endsection