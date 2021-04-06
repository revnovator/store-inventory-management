@extends('layouts.master')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
              <li class="breadcrumb-item active">Product Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
          <edit-products :product="{{ $product }}"> </edit-products>      
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>    
@endsection