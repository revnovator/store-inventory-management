@extends('layouts.master')

@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Return Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Return Products History</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
       <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Return Products History</h5></br>
                            <!-- <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"> </i> Add Category </a><br><br> -->

                            <table class="table table-bordered datatable">
                                <thead>
                                <tr>
                                    <td>#SL</td>
                                    <td>Date</td>
                                    <td>Product</td>
                                    <td>Size</td>
                                    <td>Quantity</td>                                                                        
                                </tr>
                                </thead>
                                <tbody>
                                @if($return_products)
                                    @foreach($return_products as $key => $return_product)
                                        <tr>
                                            <td>{{ ++$key}}</td>
                                            <td>{{ $return_product->date ?? '' }}</td>
                                            <td>{{ $return_product->product->name ?? '' }}</td>
                                            <td>{{ $return_product->size->size ?? '' }}</td>                                                                                        
                                            <td>{{ $return_product->quantity ?? '' }}</td>                                             
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->            
                </div>
            </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>    
@endsection