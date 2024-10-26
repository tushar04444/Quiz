@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header"><b>All Questions</b></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Question</th>
                                    <th>Category</th>
                                    <th>Correct Answer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ques as $key=>$question)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <div class="card mb-3">
                                                <img class="card-img-top img-fluid" src="{{ asset('/upload/question') }}/{{ $question->ques_ban }}" alt="Question image" width="30%" height="150px">
                                                <div class="card-header">
                                                    <h5 class="card-title">{{ $question->ques }}</h5>
                                                </div>
                                               
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label>{{ $question->opt_a }}</label>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>{{ $question->opt_b }}</label>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>{{ $question->opt_c }}</label>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>{{ $question->opt_d }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="card-header">
                                                <h5 class="card-title">{{ $question->category->category_name }}</h5>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $question->answer }}
                                        </td>
                                        <td>
                                            <a href="{{ route('ques.delete',$question->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-lg-4">
            <span class="text-center d-block my-3"><b>Add Question</b></span>

            <form action="{{ route('ques_store') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Choose Banner</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="ques_ban">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-default " placeholder="Question" name="ques">
                </div>
                <div class="form-group">
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">-- Choose Category --</option>
                        @foreach ($category as $categories)
                            <option value="{{ $categories->id }}">{{ $categories->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Option A</label>
                        <input type="text" class="form-control" placeholder="Option A" name="opt_a">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Option B</label>
                        <input type="text" class="form-control" placeholder="Option B" name="opt_b">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Option C</label>
                        <input type="text" class="form-control" placeholder="Option C" name="opt_c">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Option D</label>
                        <input type="text" class="form-control" placeholder="Option D" name="opt_d">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-default " placeholder="Correct Answer" name="answer">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Add Question</button>
                </div>
                
            </form>
    </div>
@endsection