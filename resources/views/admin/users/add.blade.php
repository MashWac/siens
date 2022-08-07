@extends('layouts.admin')

@section('content')
    @if($data['formtype']=='add')
    <div class="card">
        <div class="card-header">
            <h4>Add user</h4>
        </div>
        <div class="card-body">
            <form action="{{url('insert-user')}}" method="POST">
                @csrf 
                <div class="row">
                    <div class="col-md-6">
                        <label for="prodname">First Name:</label>
                        <input type="text" class="form-control" name="firstname">
                    </div>
                    <div class="col-md-6">
                        <label for="prodname">Last Name:</label>
                        <input type="text" class="form-control" name="lastname">
                    </div>
                    <div class="col-md-6">
                        <label for="prodname">Email:</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="col-md-6">
                        <label for="role">Role:</label>
                        <input type="number" class="form-control"name="role" id="userrole" list="roles">
                                <datalist id="roles">
                                    @foreach($data['role'] as $item):?>
                                    <option value="<?=$item['role_id']?>"><?="Role-".$item['role_name']?><option>
                                    @endforeach
                                </datalist>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
            @else
            <div class="card">
        <div class="card-header">
            <h4>Edit user</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-user/'.$data['user']->id)}}" method="POST">
                @csrf
                @method('PUT') 
                <div class="row">
                    <div class="col-md-6">
                        <label for="prodname">First Name:</label>
                        <input type="text" class="form-control" name="firstname" value="{{ $data['user']->firstname}}">
                    </div>
                    <div class="col-md-6">
                        <label for="prodname">Last Name:</label>
                        <input type="text" class="form-control" name="lastname" value="{{$data['user']->surname}}">
                    </div>
                    <div class="col-md-6">
                        <label for="prodname">Email:</label>
                        <input type="text" class="form-control" name="email" value="{{$data['user']->email}}">
                    </div>
                    <div class="col-md-6">
                        <label for="role">Role:</label>
                        <input type="number" class="form-control"name="role" id="userrole" list="roles" value="{{$data['user']->role_as}}">
                                <datalist id="roles">
                                    @foreach($data['role'] as $item):?>
                                    <option value="<?=$item['role_id']?>"><?="Role-".$item['role_name']?><option>
                                    @endforeach
                                </datalist>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
            @endif
        </div>
    </div>
@endsection