@extends('layouts.master')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Brands</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('brands.index') }}">Brands</a></li>
              <li class="breadcrumb-item active">Brand Create</li>
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
                            <h5 class="card-title">Create Brand</h5></br>
    
                                <form role="form" action="{{ route('brands.store') }}" method="post">
                                    @csrf
                                    
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input name="name" type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                                            @if($errors->has('name'))
                                                <span class="text-danger"> The name must be at least 2 characters. </span>
                                            @endif
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