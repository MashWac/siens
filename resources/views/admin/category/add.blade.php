@extends('layouts.admin')

@section('content')
    @if($data['formtype']=='add')
    <div class="card">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
            <form action="{{url('insert-cate')}}" method="POST">
                @csrf 
                <div class="row">
                    <div class="col-md-6">
                        <label for="catename">Category Name:</label>
                        <input type="text" class="form-control" name="catename">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
            @else
            <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-category/'.$data['category']->category_id)}}" method="POST">
                @csrf
                @method('PUT')  
                <div class="row">
                    <div class="col-md-6">
                        <label for="catename">Category Name:</label>
                        <input type="text" class="form-control" name="catename" value="{{$data['category']->category_name}}">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
            @endif
        </div>
    </div>
@endsection