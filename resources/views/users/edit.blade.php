@extends('layouts.master')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
              <li class="breadcrumb-item active">User Create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
       <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Create User</h5></br>
    
                                <form role="form" action="{{ route('users.update') }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input name="name" type="name" class="form-control" id="exampleInputEmail1" value="{{ $user->name ?? '' }}" placeholder="Enter name">
                                            @if($errors->has('name'))
                                            <span class="text-danger"> {{ $errors->first('name') }} </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="{{ $user->email ?? '' }}" placeholder="Enter email">
                                            @if($errors->has('email'))
                                                <span class="text-danger"> {{ $errors->first('email') }} </span>
                                            @endif
                                        </div>       

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Password</label>
                                            <input name="password" type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password">
                                            @if($errors->has('password'))
                                                <span class="text-danger"> {{ $errors->first('password') }} </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Confirm Password</label>
                                            <input name="password_confirmation" type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter confirm password">
                                        </div>                                                                                                                   
                
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"> </i> Submit</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                    <!-- /.card -->            
                </div>
            </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>    
@endsection